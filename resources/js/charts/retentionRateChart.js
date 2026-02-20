import Chart from 'chart.js/auto';

const ctx = document.getElementById('retentionRateChart');

if (ctx) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sep 2025', 'Oct 2025', 'Nov 2025', 'Dec 2025', 'Jan 2026', 'Feb 2026'],
            datasets: [
                {
                    label: 'New Customers',
                    data: [0, 0, 0, 0, 0, 0],
                    borderWidth: 2
                },
                {
                    label: 'Returning Customers',
                    data: [0, 0, 0, 0, 0, 0],
                    borderWidth: 2
                },
                {
                    label: 'Churned Customers',
                    data: [0, 0, 0, 0, 0, 0],
                    borderWidth: 2
                },
                {
                    label: 'Retention Rate (%)',
                    data: [0, 0, 0, 0, 0, 0],
                    borderWidth: 2,
                    yAxisID: 'y1'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Customers' }
                },
                y1: {
                    beginAtZero: true,
                    position: 'right',
                    title: { display: true, text: 'Retention %' }
                }
            }
        }
    });
}