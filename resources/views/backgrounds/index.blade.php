<style>
    #myPieChart {
        width: 400px !important; 
        height: 400px !important;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Background') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-12">
            <div class="row">
                <div class="col-md-2">
                    <a href="/backgrounds/create" class="btn btn-primary">Create New</a>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table id="users-table" class="table table-bordered table-striped display">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Image Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product_items)
                            <tr>
                                <td>{{$product_items->id}}</td>
                                <td>{{$product_items->image}}</td>
                                <td>
                                    <a href="/backgrounds/{{$product_items->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/backgrounds/{{$product_items->id}}/destroy" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-12">
                    <div class="chart-container">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        $('#users-table').DataTable();
    </script>
</x-app-layout>
