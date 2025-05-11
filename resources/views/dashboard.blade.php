<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Reservations</h1>
      
        <!-- Filter Section -->
        <div class="mb-4">
            <label for="filter" class="block text-sm font-medium text-gray-700">Filter by Full Name:</label>
            <input type="text" id="filter" oninput="filterTable()"
                class="mt-1 px-4 py-2 border border-gray-300 rounded-md">
        </div>

        {{-- <a href="{{ route('reservations.create') }}"
        class="inline-block bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600 transition duration-200">
        Create New
        </a> --}}

        <div class="table-responsive">
            <table id="reservationsTable" class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left" onclick="sortTable(0)">First Name</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(0)">Middle Name</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(0)">Last Name</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(1)">Contact</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(2)">Email</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(3)">Address</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(4)">Table</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(5)">Pax</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(6)">Province</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(7)">Municipality</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(8)">Barangay</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(9)">Schedule</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(10)">View Reciept</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(11)">View Order</th>
                        <th class="py-3 px-6 text-left" onclick="sortTable(12)">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($reservations as $reservation)
                    
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $reservation->first_name }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $reservation->middle_name }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $reservation->last_name }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->contact }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->email }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->address }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->table }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->pax }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->province_name }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->town_code }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->barangay_code }}</td>
                            <td class="py-3 px-6 text-left">{{ $reservation->schedule }}</td>
                            <td class="py-3 px-6 text-left">
                            <a href="/uploads/payment/{{ $reservation->payment_method }}">
                                {{-- {{ $reservation->payment_method }} --}}
                            <img src="/uploads/payment/{{ $reservation->payment_method }}" width="500" height="500"/>
                            </a>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $reservation->id }}"
                                    class="inline-block bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 transition duration-200">
                                    View
                                </a>
                                @include('order.modal_food_order')
                                {{-- <span
                                    class="px-3 py-1 rounded-full text-sm {{ $reservation->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-700' }}">
                                    {{ ucfirst($reservation->status) }}
                                </span> --}}
                            </td>
                            <td class="py-3 px-6 text-left">
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
                            <td class="py-3 px-6 text-left">
                                <a href="/reservations/{{$reservation->id}}/destroy"
                                    class="inline-block bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600 transition duration-200">
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
        </div>
    </div>
    {{-- @include('order.modal_food_order') --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function sortTable(columnIndex) {
            const table = document.getElementById("reservationsTable");
            const rows = Array.from(table.rows).slice(1); // Get all rows except the header

            const isAscending = table.getAttribute("data-sort-order") === "asc";
            rows.sort((rowA, rowB) => {
                const cellA = rowA.cells[columnIndex].textContent.trim();
                const cellB = rowB.cells[columnIndex].textContent.trim();

                if (isAscending) {
                    return cellA > cellB ? 1 : -1;
                } else {
                    return cellA < cellB ? 1 : -1;
                }
            });

            rows.forEach(row => table.appendChild(row));
            table.setAttribute("data-sort-order", isAscending ? "desc" : "asc");
        }

        function filterTable() {
            const filterValue = document.getElementById("filter").value.toLowerCase();
            const rows = document.querySelectorAll("#reservationsTable tbody tr");

            rows.forEach(row => {
                const fullNameCell = row.cells[0].textContent.toLowerCase();
                if (fullNameCell.includes(filterValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }
        function selectItem(text, button,id) {
            button.textContent = text;

            // Remove 'active' class from all items inside this dropdown only
            const dropdownMenu = button.nextElementSibling;
            dropdownMenu.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.classList.remove('active');
            });

            // Add 'active' class to the clicked item
            event.target.classList.add('active');

            //AJAX
            $.ajax({
                url: "/reservations/"+id+"/status",
                type: "POST",
                data: {
                   id: id,
                   status: text
                },
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                  console.log(response)
                  swal("Great!", `Status Changed to ${text}`, "success");
                  window.location.href = "/dashboard"
                },
                error: function(xhr, status, error){

                }
            })
        }
    </script>
</x-app-layout>
