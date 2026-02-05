if (import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        if (activeUsersChartInstance) {
            activeUsersChartInstance.destroy();
        }
    });
}


import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('activeUsersChart');
    if (!canvas) return;

    new Chart(canvas, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [{
                label: 'Active Users',
                data: [0, 0, 0, 0, 0],
                backgroundColor: '#38bdf8'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: { color: '#d1d5db' }
                }
            }
        }
    });
});
