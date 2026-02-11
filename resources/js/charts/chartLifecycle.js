export const onDocumentReady = (callback) => {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', callback, { once: true });
        return;
    }

    callback();
};

export const destroyChartOnCanvas = (ChartConstructor, canvas) => {
    if (!canvas) {
        return;
    }

    const existingChart = ChartConstructor.getChart(canvas);

    if (existingChart) {
        existingChart.destroy();
    }
};
