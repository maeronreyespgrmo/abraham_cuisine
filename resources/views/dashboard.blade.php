@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}


@section('content')
    @include('layouts.message')
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 ">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-MaleFemale"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Reservation</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{$count_reservation}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 ">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Library"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Feedbacks</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{$count_feedback}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
	<div class="card">
		{{-- <div class="card-header">
			<a href="#" class="btn btn-primary"
				data-toggle="modal"
				data-target="#create_service_modal"
			><i class="i-Add"></i> Add Service</a>
		</div> --}}
		<!-- /.card-header -->


		<div class="card-body">
                  <div class="table-responsive">
                <table class="table table-bordered table-striped" id="reservationsTable">
                <thead class="table-dark">
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Table</th>
                        <th>Pax</th>
                        <th>Province</th>
                        <th>Municipality</th>
                        <th>Barangay</th>
                        <th>Time Arrival</th>
                        <th>Time Departure</th>
                        <th>Schedule</th>
                        <th>View Reciept</th>
                        <th>View Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    
                        <tr>
                            <td>{{ $reservation->first_name }}</td>
                            <td>{{ $reservation->middle_name }}</td>
                            <td>{{ $reservation->last_name }}</td>
                            <td>{{ $reservation->contact }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->table }}</td>
                            <td>{{ $reservation->pax }}</td>
                            <td>{{ $reservation->province_name }}</td>
                            <td>{{ $reservation->town_name }}</td>
                            <td>{{ $reservation->barangay_name }}</td>
                            <td>{{ $reservation->time_arrival }}</td>
                            <td>{{ $reservation->time_departure }}</td>
                            <td>{{ $reservation->schedule }}</td>
                            <td>
                            <a href="/uploads/payment/{{ $reservation->payment_method }}">
                                {{-- {{ $reservation->payment_method }} --}}
                            <img src="/uploads/payment/{{ $reservation->payment_method }}" width="100" height="100"/>
                            </a>
                            </td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $reservation->id }}"
                                    class="btn btn-success">
                                    View
                                </a>
                            
                                {{-- <span
                                    class="px-3 py-1 rounded-full text-sm {{ $reservation->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-700' }}">
                                    {{ ucfirst($reservation->status) }}
                                </span> --}}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button id="dropdownButton{{$reservation->id}}" class="{{ 
    $reservation->status == "Confirmed" 
        ? 'btn btn-success dropdown-toggle' 
        : ($reservation->status == "Cancelled" 
            ? 'btn btn-warning dropdown-toggle' 
            : 'btn btn-danger dropdown-toggle'
        ) 
}}
" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{$reservation->status}}
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li>
                                        <a class="dropdown-item" href="#" onclick="selectItem('Confirmed', this.closest('.dropdown').querySelector('.dropdown-toggle'),{{$reservation->id}})">Confirmed</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#" onclick="selectItem('Pending', this.closest('.dropdown').querySelector('.dropdown-toggle'),{{$reservation->id}})">Pending</a>
                                      </li>
                                      <li>
                                        <a class="dropdown-item" href="#" onclick="selectItem('Cancelled', this.closest('.dropdown').querySelector('.dropdown-toggle'),{{$reservation->id}})">Cancelled</a>
                                      </li>                                     
                                    </ul>
                                  </div>
                                {{-- <span
                                    class="px-3 py-1 rounded-full text-sm {{ $reservation->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-700' }}">
                                    {{ ucfirst($reservation->status) }}
                                </span> --}}
                            </td>
                            <td>
                                <a href="/reservations/{{$reservation->id}}/destroy"
                                    class="btn btn-danger">
                                    Delete
                                </a>
                                {{-- <span
                                    class="px-3 py-1 rounded-full text-sm {{ $reservation->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-700' }}">
                                    {{ ucfirst($reservation->status) }}
                                </span> --}}
                            </td>
 
                            {{-- <td class="py-3 px-6 text-center">
                                <a href="{{ route('reservations.show', $reservation->id) }}"
                                    class="inline-block bg-blue-500 text-black px-4 py-1 rounded-md hover:bg-blue-600 transition duration-200">
                                    View
                                </a>
                            </td> --}}
                        </tr>
           
                    @endforeach
                </tbody>
            </table>
                      @foreach ($reservations as $reservation)
                @include('order.modal_food_order')
                @endforeach
		</div>
        	</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

@section('page_script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        $('#reservationsTable').DataTable({
            paging: true,
            searching: true,
            ordering: true,
            info: true,
            responsive: true,
        });
    });

    function selectItem(text, button, id) {
        button.textContent = text;

        const dropdownMenu = button.nextElementSibling;
        dropdownMenu.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.classList.remove('active');
        });

        event.target.classList.add('active');

        $.ajax({
            url: "/reservations/" + id + "/status",
            type: "POST",
            data: {
                id: id,
                status: text
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                swal("Great!", `Status Changed to ${text}`, "success")
                    .then(() => window.location.href = "/dashboard");
            },
            error: function (xhr, status, error) {
                console.error("Error updating status:", error);
            }
        });
    }
</script>
@endsection
@endsection