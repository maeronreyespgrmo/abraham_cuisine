@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

@section('content')
    @include('layouts.message')
	<div class="card">
		<div class="card-header">
		                <a href="/product/create" class="btn btn-primary">Create New</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
                       <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="users-table" class="table table-bordered table-striped display nowrap" border="1">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Pax</th>
                                    <th>Type</th>
                                    <th>Preparation Time</th> 
                                    <th>Image Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product_items)
                                <tr>
                                    <td>{{$product_items->id}}</td>
                                    <td>{{$product_items->name}}</td>
                                    <td>{{$product_items->description}}</td>
                                    <td>{{$product_items->price}}</td>
                                    <td>{{$product_items->pax}}</td>
                                    <td>{{$product_items->product_type}}</td>
                                    <td>{{$product_items->preparation_time}}</td>
                                    <td>{{$product_items->image_name}}</td>
                                    <td>
                                        @if($product_items->status == "active")
                                        <a href="/product/{{$product_items->id}}/inactive_status" class="btn btn-secondary">Hide</a>
                                        @else
                                        <a href="/product/{{$product_items->id}}/active_status" class="btn btn-success">Unhide</a>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="/product/{{$product_items->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/product/{{$product_items->id}}/destroy" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <center>
                        <canvas id="myPieChart"></canvas> 
                    </center>
                </div>
            </div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

    @section('page_script')
          <script>
        $('#users-table').DataTable({
            responsive: true
        });
    </script>
    @endsection

@endsection