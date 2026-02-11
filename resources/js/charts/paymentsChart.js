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
import { destroyChartOnCanvas, onDocumentReady } from './chartLifecycle';

Chart.register(
    LineController,
    LineElement,
    PointElement,
    LinearScale,
    CategoryScale,
    Tooltip,
    Filler
);

const CHART_ID = 'paymentsChart';

const initPaymentsChart = () => {
    const canvas = document.getElementById(CHART_ID);

    if (!canvas) {
        return;
    }

    destroyChartOnCanvas(Chart, canvas);

    new Chart(canvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
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
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
        },
    });
};

onDocumentReady(initPaymentsChart);

if (import.meta.hot) {
    import.meta.hot.accept();
    import.meta.hot.dispose(() => {
        destroyChartOnCanvas(Chart, document.getElementById(CHART_ID));
    });
}
