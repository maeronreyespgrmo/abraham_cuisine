<style>
    #myPieChart {
        max-width: 100%;
        height: auto;
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
            {{ __('Feedbacks') }}
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
                <div class="col-lg-8 col-md-12">
                    <div class="table-responsive">
                        <table id="users-table" class="table table-bordered table-striped display nowrap" border="1">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Score</th>
                                    <th>Comments</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($feedback_scores as $feedback_score_items)
                                <tr>
                                    <td>{{ $feedback_score_items->id }}</td>
                                    <td>
                                        @if($feedback_score_items->score >= 1 && $feedback_score_items->score < 2)
                                        <img src="../img/feedback/1.png" width="30" height="30">
                                        @elseif($feedback_score_items->score >= 2 && $feedback_score_items->score < 3)
                                        <img src="../img/feedback/2.png" width="30" height="30">
                                        @elseif($feedback_score_items->score >= 3 && $feedback_score_items->score <= 4)
                                        <img src="../img/feedback/3.png" width="30" height="30">
                                        @else
                                        <img src="../img/feedback/4.png" width="30" height="30">
                                        @endif
                                    </td>
                                    <td>{{ $feedback_score_items->other_comments }}</td>
                                    <td>{{ $feedback_score_items->sentimental }}</td>
                                    <td>
                                        <a href="/feedbacks/{{$feedback_score_items->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/feedbacks/{{$feedback_score_items->id}}/destroy" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js and Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

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
                    backgroundColor: ['#FF0000', '#008000', '#FFCE56']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = dataValues.reduce((a, b) => a + b, 0);
                            let percentage = (value / sum * 100).toFixed(2) + "%";
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
</x-app-layout>
