<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        
        $page = [
            'name'      =>  'Products',
            'title'     =>  'Products',
            'crumb'     =>  array(
            "Index" => '/dashboard',
            "" => ''
            )
        ];

        return view('profile.edit', [
            'user' => $request->user(),
            'page'=>$page
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
            if (Hash::check($request->current_password, Auth::user()->password)) {
                if ($request->new_password  == $request->confirm_password) {
                    $user = User::find(Auth::user()->id);
                    $user->password = Hash::make($request->new_password);
                    $user->updated_at = Carbon::now('Asia/Manila');
                    $user->save();
                    return back()->with('success', 'Password has been updated');
                } else {
                    return back()->withErrors('New password must be the same with the password confirmation.')->withInput($request->all);
                }
            } else {
                return back()->withErrors('Invalid current password')->withInput($request->all);
            }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
