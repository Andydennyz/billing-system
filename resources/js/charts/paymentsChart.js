import {
    Chart,
    LineController,
    LineElement,
    PointElement,
    LinearScale,
    CategoryScale,
    Tooltip,
    Filler,
} from 'chart.js';

Chart.register(
    LineController,
    LineElement,
    PointElement,
    LinearScale,
    CategoryScale,
    Tooltip,
    Filler
);

document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('paymentsChart');

    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Payments',
                    data: [0, 0, 0, 0, 0, 0],
                    borderColor: '#fb923c',
                    backgroundColor: 'rgba(251,146,60,0.15)',
                    tension: 0.4,
                    fill: true,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
            },
            scales: {
                x: {
                    ticks: { color: '#9ca3af' },
                    grid: { display: false },
                },
                y: {
                    ticks: { color: '#9ca3af' },
                    grid: { color: '#262626' },
                },
            },
        },
    });
});
