<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\ReservationList;
use App\Models\Table;
use App\Models\FoodOrder;
use App\Models\Notification;
use App\Models\FeedbackScore;
use App\Events\Notifications;
use Illuminate\Support\Facades\DB;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
   // Display a listing of reservations
   public function index()
   {
            $page = [
                'name'      =>  'Reservation',
                'title'     =>  'Reservation',
                'crumb'     =>  array(
                "" => '/dashboard',
                "" => ''
                )
            ];
    
    // Retrieve all reservations
    $reservations = DB::table('reservations')
    ->join('tbl_psgc_provinces', 'reservations.province_code', '=', 'tbl_psgc_provinces.code')
    ->join('tbl_psgc_towns', 'reservations.town_code', '=', 'tbl_psgc_towns.code')
    ->join('tbl_psgc_barangays', 'reservations.barangay_code', '=', 'tbl_psgc_barangays.code')
    ->orderBy('reservations.id', 'DESC')
    ->orderBy('tbl_psgc_provinces.name', 'DESC')
    ->orderBy('tbl_psgc_towns.name', 'DESC') 
    ->select('reservations.*', 'tbl_psgc_towns.name as town_name', 'tbl_psgc_provinces.name as province_name', 'tbl_psgc_barangays.name as barangay_name')
    ->get();

    $count_reservation = $reservations->count();
    $count_feedback = FeedbackScore::all()->count();
    
    // return$count_reservation;

    // Pass data to the view
    return view('dashboard', compact('reservations','page','count_reservation','count_feedback'));
   }

   // Show the form for creating a new reservation
   public function create()
   {
    // Retrieve all reservations
    $table = Table::all();
    return view('reservations.create', compact('table'));
   }

    // Store a newly created reservation in the database
    public function store(Request $request)
    {   
        try {
            // Validate the incoming data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'middle_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'contact' => 'required|string|max:255',
                'email' => 'required|email',
                'time_arrival' => 'required|string|max:255',
                'time_departure' => 'required|string|max:255',
                'table' => 'required|string|max:255',
                'pax' => 'required|string|max:255',
                'schedule' => 'required|date',
                'province_select' => 'required',
                'town_select' => 'required',
                'barangay_select' => 'required',
                'payment_method' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if (Reservation::where('table', $request->table)->exists()) {
            //    return back()->withErrors("Table has been reserved!");
              return redirect()->route('welcome')
    ->withErrors([
        'error' => 'Table has been reserved!'
    ])
    ->withInput($request->all())
    ->with('scrollTo', 'scroll-target'); // ✅ This is now a real session key
            } 
            else {
                    $image = $request->file('payment_method');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/payment'), $imageName);

                    // return$imageName;

                    // Add the status manually (set to "pending")
                    $validated['status'] = 'pending';

                    $validated['time_arrival'] = $request->time_arrival;

                    $validated['time_departure'] = $request->time_departure;

                    $validated['payment_method'] = $imageName;

                    $validated['province_code'] = $request->province_select;

                    $validated['town_code'] = $request->town_select;

                    $validated['barangay_code'] = $request->barangay_select;

                    // Create the reservation and store  it in the database
                    $reservation = Reservation::create($validated); 

                    $selectedItems = $request->input('food_order'); 
                    $time_preparation = $request->input('time_preparation');
                    foreach ($selectedItems as $key=> $item) {

                    $foodproduct = [
                    'reservation_id'=>$reservation->id,
                    'name' => $item,
                    'preparation_time' => $time_preparation[$key],
                    ];

                    FoodOrder::create($foodproduct);
                    }


                    $fullname = $request->first_name . "" . $request->middle_name . "" . $request->last_name;
                    Notification::Create([
                    'name' => $fullname,
                    'description' => "have reserved",
                    'date' => $request->schedule,
                    'status' => 'Create',
                    ]);

                    broadcast(new Notifications('weadadad'));
                    //MAIL
                    $mailInfo = new \stdClass();
                    $mailInfo->first_name = $request->first_name;
                    $mailInfo->middle_name = $request->middle_name;
                    $mailInfo->last_name = $request->last_name;
                    $mailInfo->food_order = $selectedItems;

                    Mail::to($request->email)->send(new TestMail($mailInfo));

                    //return"we"; 
                    // return redirect()->route('welcome')->with('success', 'Reservation created successfully!');
                    return redirect()->route('welcome')->with([
                    'success' => 'Saved successfully!',
                    'scrollTo' => 'scroll-target'
                    ]);
            }

        } catch (\Exception $e) {
            // You can customize this response as needed
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Something went wrong.',
            //     'error' => $e->getMessage(),
            // ], 500);
            // return redirect()->back()->with('success', 'Feedback submitted successfully!');
            // dd($e->getMessage());
            // return $e->getMessage();
            // return redirect()->back()->withErrors($e->getMessage())->withInput();
            return redirect()->route('welcome')->withErrors($e->getMessage());
            // return redirect()->route('welcome')->withErrors($e->getMessage());
        }
    }

    public function show($id)
    {
    $reservation = Reservation::findOrFail($id);
    $tables = Table::orderBy('id','ASC')->get(); // Fetch all available tables
    // return$tables;
    return view('reservations.show', compact('reservation', 'tables'));
    }

    

   // Show the form for editing the specified reservation
   public function edit($id)
   {
       $reservation = Reservation::find($id);

       if (!$reservation) {
               return back()->withErrors("Reservation Not Found");
       }

       // return a view or data for editing
       // return view('reservations.edit', compact('reservation'));
   }

//    public function update(Request $request, $id)
//    {
//     $reservation = Reservation::findOrFail($id);
//     $validated = $request->validate([
//         'first_name' => 'required|string|max:255',
//         'middle_name' => 'required|string|max:255',
//         'last_name' => 'required|string|max:255',
//         'contact' => 'required|string|max:255',
//         'email' => 'required|email',
//         'time_arrival' => 'required|string|max:255',
//         'address' => 'required|string',
//         'table' => 'required|string|max:255',
//         'pax' => 'required|string|max:255',
//         'schedule' => 'required|date',
//         'status' => 'required|string|in:pending,confirmed,cancelled',
//     ]);
//     $reservation->update($validated);

//     $fullname = $request->first_name . "" . $request->middle_name . "" . $request->last_name;

//     Notification::create([
//         'name' => $fullname,
//         'description' => "have change reservervation",
//         'date' => $request->schedule,
//         'status' => 'Update',
//     ]);

//     broadcast(new Notifications('weadadad'));
//     return redirect()->route('reservations.show',$id)->with('success', 'Reservation updated successfully!');
// }


   // Remove the specified reservation from the database
   public function destroy($id)
   {
       $reservation = Reservation::find($id);

       //broadcast(new Notifications('weadadad'));

       if (!$reservation) {
               return back()->withErrors("Reservation Not Found");
       }
       
       $reservation->delete();
       return back()->with('success', 'Reservation deleted successfully!');
   }

   public function isStatus(Request $request,$id)
   {
    $reservation = Reservation::find($request->id);
    $reservation->status = $request->status; // Laravel will escape properly
    $reservation->save();

    return"success";
   }

}