import Chart from 'chart.js/auto';

const ctx = document.getElementById('activeUsersChart');

if (ctx) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [
                {
                    label: 'Hotspot Users',
                    data: [0, 0, 0, 0, 0, 0, 0],
                    borderColor: '#fb923c',
                    backgroundColor: 'rgba(251, 146, 60, 0.15)',
                    tension: 0.4,
                    pointRadius: 4,
                    fill: true,
                },
                {
                    label: 'PPPoE Users',
                    data: [0, 0, 0, 0, 0, 0, 0],
                    borderColor: '#f97316',
                    backgroundColor: 'rgba(249, 115, 22, 0.15)',
                    tension: 0.4,
                    pointRadius: 4,
                    fill: true,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        color: '#e5e7eb'
                    }
                }
            },
            scales: {
                x: {
                    ticks: { color: '#9ca3af' },
                    grid: { color: 'rgba(255,255,255,0.05)' }
                },
                y: {
                    beginAtZero: true,
                    ticks: { color: '#9ca3af' },
                    grid: { color: 'rgba(255,255,255,0.05)' }
                }
            }
        }
    });
}
