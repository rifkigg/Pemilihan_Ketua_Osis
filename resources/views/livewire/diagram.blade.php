<div>
    <canvas id="myChart"></canvas>
</div>
@push('js')
<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: {!! json_encode($labels) !!},
        datasets: [{
            label: 'Total Vote',
            data: {!! json_encode($datas) !!},
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    }); 
</script>
@endpush