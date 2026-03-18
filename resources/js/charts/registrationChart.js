import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById('registrationChart');

    if (!ctx) return;

    const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(251,146,60,0.4)');
    gradient.addColorStop(1, 'rgba(251,146,60,0)');

    new Chart(ctx, {

        type: 'line',

        data: {
            labels: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],

            datasets: [
                {
                    label: 'Registrations',
                    data: [0,0,0,0,1,0,0], // spike on Thursday
                    borderColor: '#fb923c',
                    backgroundColor: gradient,
                    fill: true,
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
                    display: false
                }
            },

            scales: {

                x: {
                    ticks: {
                        color: '#9ca3af'
                    },
                    grid: {
                        color: 'rgba(255,255,255,0.05)'
                    },
                    title: {
                        display: true,
                        text: 'Days',
                        color: '#9ca3af'
                    }
                },

                y: {
                    ticks: {
                        color: '#9ca3af',
                        stepSize: 1
                    },
                    grid: {
                        color: 'rgba(255,255,255,0.05)'
                    },
                    title: {
                        display: true,
                        text: 'Number of Users',
                        color: '#9ca3af'
                    },
                    beginAtZero: true
                }

            }

        }

    });

});