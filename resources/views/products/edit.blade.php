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
		{{-- <div class="card-header">
		                <a href="/product/create" class="btn btn-primary">Create New</a>
		</div> --}}
		<!-- /.card-header -->
		<div class="card-body">
             <div class="row">
                <div class="col-md-12">
                    <form action="/product/{{$product->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
                        </div>
                    
                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description(Including)</label>
                            <textarea class="form-control" id="description" name="description" rows="3" value="{{$product->description}}" required>{{$product->description}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Preparation Time</label>
                            <input type="number" class="form-control" id="preparation_time" name="preparation_time" value="{{$product->preparation_time}}" required>
                        </div>
                        

                        <div class="mb-3">
                            <label for="name" class="form-label">Product Type</label>
                            <select name="type">  
                                <option value="{{$product->product_type}}">{{$product->product_type}}</option>
                                <option value="Exclusive">Exclusive</option>
                                <option value="Special">Special</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Pax</label>
                            <input type="text" class="form-control" id="pax" name="pax" value="{{$product->pax}}" required>
                        </div>
                    
                        <!-- Image Upload Field -->

                        @if($product->image_name != "")
                        Uploaded File: {{$product->image_name == "" ? "" : ""}}
    
                        <a target="_blank" href="/uploads/products/{{$product->image_name}}">{{$product->image_name}}</a>
                        <a href="/product/{{$product->id}}/upload_destroy" class="btn btn-danger">Delete</a><br>
                        @else
                        <input class="form-control" name="image" type="file" id="formFile">
                        @endif
       
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

    @section('page_script')

    @endsection

@endsection