@if (count($errors))

    <div class="alert alert-danger" role="alert">
        {{-- <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> --}}
        {{-- <strong class="text-capitalize">Oops!</strong><br> --}}
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@else
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong class="text-capitalize">Success!</strong><br>
            {{ session('success') }}
        </div>
    @endif

@endif
<style>
.alert {
    background-color: transparent;
    padding: 1rem;
    margin-bottom: 1rem;
    color: inherit;
    border: 1px solid transparent;
    border-radius: 0.375rem; /* Example value for border-radius */
    position: relative;
}

.alert-success {
    color: #0f5132;
    background-color: #d1e7dd;
    border-color: #badbcc;
}

.alert-danger {
    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
}


</style>
