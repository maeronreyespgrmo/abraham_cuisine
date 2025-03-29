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
                <div class="col-md-6">
                    <table id="users-table" class="table table-bordered table-striped display" border=1>
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Score</th>
                                <th>Comments</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedback_scores as $feedback_score_items)
                            <tr>
                                <td>{{ $feedback_score_items->id }}</td>
                                <td>{{ $feedback_score_items->scores }}</td>
                                <td>{{ $feedback_score_items->other_comments }}</td>
                                <td>{{ $feedback_score_items->sentimental }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <center>
                        <canvas id="myPieChart"></canvas> 
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js and Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script>
        // Get the context for the pie chart
        const ctx = document.getElementById('myPieChart').getContext('2d');

        // Data from Laravel
        const dataValues = [{{$score[0]}}, {{$score[1]}}, {{$score[2]}}];
        
        // Create the pie chart
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Negative', 'Positive', 'Neutral'],
                datasets: [{
                    data: dataValues,
                    backgroundColor: ['#FF0000', '#008000', '#FFCE56']
                }]
            },
            options: {
                responsive: true,
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
