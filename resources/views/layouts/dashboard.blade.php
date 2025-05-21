@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script')
    <script>
        var services_data = @json($services_data);
        var equipments_data = @json($equipments_data);
    </script>
    <script src="/js/filter.js"></script>
    <script src="/js/dashboard.js"></script>
@endsection

<style>
th {
  background-color: #f2f2f2; /* Light gray */
  color: #000; /* Black text */
}
</style>

@section('content')

    @include('layouts.message')
    <div class="row">
        <div class="col-3">
            <button type="button" class="btn btn-lg mb-3" data-toggle="modal" data-target="#exampleModal"><i
                    class="i-Filter-2"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Ticket text-cyan"></i>
                    <p class="text-muted mt-2 mb-2">Total Request</p>
                    <p class="text-cyan text-24 line-height-1 m-0" id="total-data">               
                       @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                       <a href="" data-toggle="modal" data-target="#myModal" style="color: inherit; text-decoration: none;">{{ $widgets_data['total'] }}</a>
                       @else
                       <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['total'] }}</a>
                       @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Sand-watch-2 text-muted"></i>
                    <p class="text-muted mt-2 mb-2">Waiting</p>
                    <p class="text-muted text-24 line-height-1 m-0" id="total-data">
                        @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                        <a href="" data-toggle="modal" data-target="#myModalWaiting" style="color: inherit; text-decoration: none;">{{ $widgets_data['waiting'] }}</a> 
                        @else
                            <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['waiting'] }}</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Start-2 text-success"></i>
                    <p class="text-muted mt-2 mb-2">Serving</p>
                    <p class="text-success text-24 line-height-1 m-0" id="serving-data">

                        @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                        <a href="" data-toggle="modal" data-target="#myModalServing" style="color: inherit; text-decoration: none;">{{ $widgets_data['serving'] }}</a> 
                        @else
                        <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['serving'] }}</a> 
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Like"></i>
                    <p class="text-muted mt-2 mb-2">Done</p>
                    <p class="text-primary text-24 line-height-1 m-0" id="done-data">
                         
                        @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                        <a href="" data-toggle="modal" data-target="#myModalDone" style="color: inherit; text-decoration: none;">{{ $widgets_data['done'] }}</a> 
                        @else
                        <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['done'] }}</a> 
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Sand-watch  text-orange"></i>
                    <p class="text-muted mt-2 mb-2">Pending</p>
                    <p class="text-orange text-24 line-height-1 m-0" id="pending-data">
                         
                        
                        @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                        <a href="" data-toggle="modal" data-target="#myModalPending" style="color: inherit; text-decoration: none;">{{ $widgets_data['pending'] }}</a> 
                        @else
                        <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['pending'] }}</a> 
                        @endif
                        {{-- {{ $widgets_data['pending'] }} --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-2 col-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Folder-Zip text-danger"></i>
                    <p class="text-muted mt-2 mb-2">Archived</p>
                    <p class="text-danger text-24 line-height-1 m-0" id="archive-data">
                        
                        @if(Auth::user()->classification_id == 1 || Auth::user()->classification_id == 2)
                        <a href="" data-toggle="modal" data-target="#myModalArchived" style="color: inherit; text-decoration: none;">{{ $widgets_data['archive'] }}</a> 
                        @else
                        <a href="" style="color: inherit; text-decoration: none;">{{ $widgets_data['archive'] }}</a> 
                        @endif
                        {{-- {{ $widgets_data['archive'] }} --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-md-4">
            <div class="card">
                <div class="card-header">
                    <b class="text-primary">Tally of Requested Services</b>
                </div>
                <div class="card-body" style="overflow: auto">
                    <div id="service_chart" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="mb-3 col-md-8">
            <div class="card">
                <div class="card-header">
                    <b class="text-primary">Tally of Tagged Equipments</b>
                </div>
                <div class="card-body" style="overflow: auto">
                    <div id="equipment_chart" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Filter
                    </h5>
                    <button class="btn btn-close" type="button" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <select class="form-control form-control-lg" name="years" id="years">
                                <option value="all" selected>All</option>
                                @foreach ($all_requests_years as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4" id="months-div" hidden>
                            <select class="form-control form-control-lg" name="months" id="months">

                            </select>
                        </div>
                        <div class="col-md-4" id="days-div" hidden>
                            <select class="form-control form-control-lg" name="days" id="days">

                            </select>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <span for="">
                                Date From
                            </span>
                            <input type="date" class="form-control" name="date_from" id="date_from" required>
                        </div>
                        <div class="col-md-6">
                            <span for="">
                                Date To
                            </span>
                            <input type="date" class="form-control" name="date_to" id="date_to" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" id="clear-filter">Reset</button>
                    <button class="btn btn-primary ms-2" type="button" id="filter-button">
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.total_request')
    @include('dashboard.waiting')
    @include('dashboard.serving')
    @include('dashboard.done')
    @include('dashboard.pending')
    @include('dashboard.archived')
   
@endsection