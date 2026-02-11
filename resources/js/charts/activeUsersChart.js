import Chart from 'chart.js/auto';

// Store chart instance globally for cleanup
let activeUsersChartInstance = null;

function initChart() {
    const canvas = document.getElementById('activeUsersChart');
    if (!canvas) return;
    
    // Clean up existing chart
    if (activeUsersChartInstance) {
        activeUsersChartInstance.destroy();
    }
    
    activeUsersChartInstance = new Chart(canvas, {
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
}

// Use a single DOMContentLoaded listener
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initChart);
} else {
    initChart();
}

// HMR cleanup
if (import.meta.hot) {
    import.meta.hot.accept(() => {
        // Reinitialize chart on HMR update
        initChart();
    });
    
    import.meta.hot.dispose(() => {
        if (activeUsersChartInstance) {
            activeUsersChartInstance.destroy();
            activeUsersChartInstance = null;
        }
    });
}