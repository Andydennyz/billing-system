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

// Store chart instance globally for cleanup
let chartInstance = null;

function initChart() {
    const canvas = document.getElementById('paymentsChart');
    if (!canvas) return;
    
    // Clean up existing chart
    if (chartInstance) {
        chartInstance.destroy();
    }
    
    chartInstance = new Chart(canvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                data: [0, 0, 0, 0, 0, 0],
                borderColor: '#fb923c',
                backgroundColor: 'rgba(251,146,60,0.15)',
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } }
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
        if (chartInstance) {
            chartInstance.destroy();
            chartInstance = null;
        }
    });
}