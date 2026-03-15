import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById('revenueChart');

    if (!ctx) return;

    new Chart(ctx, {

        type: 'line',

        data: {
            labels: [
                'Aug 2025',
                'Sep 2025',
                'Oct 2025',
                'Nov 2025',
                'Dec 2025',
                'Jan 2026',
                'Feb 2026',
                'Mar 2026',
                'Apr 2026',
                'May 2026'
            ],

            datasets: [

                {
                    label: 'Historical Revenue',
                    data: [0,0,0,0,0,0,0,null,null,null],
                    borderColor: '#3b82f6',
                    backgroundColor: '#3b82f6',
                    tension: 0.4
                },

                {
                    label: 'Forecast Revenue',
                    data: [null,null,null,null,null,null,null,1.05,1.10,1.18],
                    borderColor: '#f59e0b',
                    backgroundColor: '#f59e0b',
                    borderDash: [6,6],
                    tension: 0.4
                },

                {
                    label: 'Upper Confidence',
                    data: [null,null,null,null,null,null,null,1.10,1.15,1.22],
                    borderColor: '#fbbf24',
                    borderDash: [2,2],
                    tension: 0.4
                },

                {
                    label: 'Lower Confidence',
                    data: [null,null,null,null,null,null,null,1.00,1.05,1.12],
                    borderColor: '#92400e',
                    borderDash: [2,2],
                    tension: 0.4
                }

            ]
        },

        options: {

            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    labels: {
                        color: '#9ca3af'
                    }
                }
            },

            scales: {

                x: {
                    ticks: {
                        color: '#9ca3af'
                    },
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#9ca3af'
                    }
                },

                y: {
                    ticks: {
                        color: '#9ca3af'
                    },
                    title: {
                        display: true,
                        text: 'Revenue (KES)',
                        color: '#9ca3af'
                    }
                }

            }

        }

    });

});