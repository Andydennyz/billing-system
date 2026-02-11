import Chart from 'chart.js/auto';
import { destroyChartOnCanvas, onDocumentReady } from './chartLifecycle';

const CHART_ID = 'activeUsersChart';

const initActiveUsersChart = () => {
    const canvas = document.getElementById(CHART_ID);

    if (!canvas) {
        return;
    }

    destroyChartOnCanvas(Chart, canvas);

    new Chart(canvas, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [
                {
                    label: 'Active Users',
                    data: [0, 0, 0, 0, 0],
                    backgroundColor: '#38bdf8',
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: { color: '#d1d5db' },
                },
            },
        },
    });
};

onDocumentReady(initActiveUsersChart);

if (import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        destroyChartOnCanvas(Chart, document.getElementById(CHART_ID));
    });
}
