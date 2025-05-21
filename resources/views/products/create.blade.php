@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    
                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description(Including)</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Price</label>
                            <input type="number" class="form-control" id="name" name="price" required>
                        </div>

                        <div class="mb-3">
                        <label for="name" class="form-label">Product Type</label>
                        <select name="type">  
                            <option value="Exclusive">Exclusive</option>
                            <option value="Special">Special</option>
                        </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Pax</label>
                            <input type="text" class="form-control" id="pax" name="pax" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Preparation Time</label>
                            <input type="text" class="form-control" id="preparation_time" name="preparation_time" required>
                        </div>

                        <!-- Image Upload Field -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image Name</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
		<!-- /.card-body -->
	    </div>
	<!-- /.card -->

    @section('page_script')
 
    </script>
    @endsection

@endsection