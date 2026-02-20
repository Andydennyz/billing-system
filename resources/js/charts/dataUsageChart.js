import Chart from 'chart.js/auto';

const ctx = document.getElementById('dataUsageChart');

if (ctx) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb'],
            datasets: [{
                label: 'Data Usage (GB)',
                data: [0, 0, 0, 0, 0, 0],
                borderWidth: 2,
                tension: 0.4,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'GB' }
                }
            }
        }
    });
}