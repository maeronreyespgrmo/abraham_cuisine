@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
div.dt-container {
        width: 800px;
        margin: 0 auto;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

@section('content')
    @include('layouts.message')
	<div class="card">
		{{-- <div class="card-header">
			<a href="#" class="btn btn-primary"
				data-toggle="modal"
				data-target="#create_service_modal"
			><i class="i-Add"></i> Add Service</a>
		</div> --}}
		<!-- /.card-header -->
		<div class="card-body">
                            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped display nowrap" border="1">
                            <thead class="table-dark">
                                <tr>
                                    <th>Question</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. How would you rate the quality of the food?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[0] == 0)
                                        No scores yet 
                                        @elseif($feedback_question_average[0] >= 1 && $feedback_question_average[0] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[0] >= 2 && $feedback_question_average[0] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[0] >= 3 && $feedback_question_average[0] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. How would you rate the customer service?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[1] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[1] >= 1 && $feedback_question_average[1] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[1] >= 2 && $feedback_question_average[1] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[1] >= 3 && $feedback_question_average[1] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. How would you rate the ambiance of the restaurant?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[2] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[2] >= 1 && $feedback_question_average[2] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[2] >= 2 && $feedback_question_average[2] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[2] >= 3 && $feedback_question_average[2] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>4. How likely are you to recommend this restaurant to a friend?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[3] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[3] >= 1 && $feedback_question_average[3] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[3] >= 2 && $feedback_question_average[3] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[3] >= 3 && $feedback_question_average[3] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>5. Was the food served at the correct temperature?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[4] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[4] >= 1 && $feedback_question_average[4] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[4] >= 2 && $feedback_question_average[4] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[4] >= 3 && $feedback_question_average[4] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>6. Was the restaurant clean and well-maintained?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[5] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[5] >= 1 && $feedback_question_average[5] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[5] >= 2 && $feedback_question_average[5] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[5] >= 3 && $feedback_question_average[5] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>7. Was the wait time for the food acceptable?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[6] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[6] >= 1 && $feedback_question_average[6] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[6] >= 2 && $feedback_question_average[6] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[6] >= 3 && $feedback_question_average[6] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>8. Did the restaurant meet your expectations?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[7] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[7] >= 1 && $feedback_question_average[7] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[7] >= 2 && $feedback_question_average[7] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[7] >= 3 && $feedback_question_average[7] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>9. How would you rate the price of the meal?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[8] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[8] >= 1 && $feedback_question_average[8] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[8] >= 2 && $feedback_question_average[8] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[8] >= 3 && $feedback_question_average[8] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>10. Would you visit this restaurant again?
                                    </td>
                                    <td>
                                        @if($feedback_question_average[9] == 0)
                                        No scores yet
                                        @elseif($feedback_question_average[9] >= 1 && $feedback_question_average[9] < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_question_average[9] >= 2 && $feedback_question_average[9] < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_question_average[9] >= 3 && $feedback_question_average[9] < 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table id="users-table" class="table table-bordered table-striped display nowrap" border="1">
                        <thead class="table-dark">
                            <tr>
                                <th>Comments</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedback_scores as $feedback_score_items)
                            <tr>
                                <td>{{$feedback_score_items->other_comments}}
                                </td>
                                <td>
                                    <a href="/feedbacks/{{$feedback_score_items->id}}/edit" class="btn btn-warning">View Survey</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- Chart.js and Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

        @section('page_script')


    

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable({
                responsive: true
            });
        });

        // Get the context for the pie chart
        const ctx = document.getElementById('myPieChart').getContext('2d');

        // Data from Laravel
        const dataValues = [{{$score[0]}}, {{$score[1]}}, {{$score[2]}}, {{$score[3]}}];
        
        // Create the pie chart
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Poor', 'Good', 'Average', 'Excellent'],
                datasets: [{
                    data: dataValues,
                    backgroundColor: ['#FF0000', '#008000', '#FFCE56', '#36A2EB']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
        display: true,
        text: 'Customer Interaction Flow- Abrahams Cuisine',
        font: {
          size: 18
        }
    },
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = dataValues.reduce((a, b) => a + b, 0);
                            let percentage = (value / sum * 100).toFixed(0) + "%";
                            return percentage;
                        },
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 14
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
        @endsection

@endsection