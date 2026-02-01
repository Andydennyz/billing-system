import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('paymentsChart');

    if (!canvas) return;

    const ctx = canvas.getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Payments (KES)',
                    data: [12000, 19000, 15000, 22000, 18000, 26000],
                    borderColor: '#22c55e',
                    backgroundColor: 'rgba(34, 197, 94, 0.2)',
                    tension: 0.4,
                    fill: true,
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
