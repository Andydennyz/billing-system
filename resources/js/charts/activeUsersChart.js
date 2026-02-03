import Chart from 'chart.js/auto';

const activeUsersCanvas = document.getElementById('activeUsersChart');

if (activeUsersCanvas) {
    const activeUsersCtx = activeUsersCanvas.getContext('2d');

    new Chart(activeUsersCtx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue'],
            datasets: [
                {
                    label: 'Hotspot Users',
                    data: [0, 0],
                    borderColor: '#fb923c',
                    tension: 0.4,
                    pointRadius: 4
                },
                {
                    label: 'PPPoE Users',
                    data: [0, 0],
                    borderColor: '#38bdf8',
                    tension: 0.4,
                    pointRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: { color: '#d1d5db' }
                }
            },
            scales: {
                x: { ticks: { color: '#9ca3af' } },
                y: { ticks: { color: '#9ca3af' } }
            }
        }
    });
}
