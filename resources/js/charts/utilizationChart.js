import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById('utilizationChart');

    if (!ctx) return;

    new Chart(ctx, {
        type: 'doughnut',

        data: {
            labels: [
                'Basic Package',
                'Standard Package',
                'Premium Package',
                'Enterprise Package'
            ],

            datasets: [{
                label: 'Packages In Use',

                data: [45, 30, 15, 10],

                backgroundColor: [
                    '#3b82f6',
                    '#22c55e',
                    '#f59e0b',
                    '#ef4444'
                ],

                borderWidth: 0
            }]
        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#9ca3af'
                    }
                }
            }

        }

    });

});