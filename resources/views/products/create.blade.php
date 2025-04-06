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
            {{ __('Create Products') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        @include('layouts.message')

        <div class="bg-white shadow-md rounded-lg p-12">
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
                            <label for="description" class="form-label">Description</label>
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
        </div>
    </div>
</x-app-layout>
