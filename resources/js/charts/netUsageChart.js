import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById('netUsageChart');

    if (!ctx) return;

    new Chart(ctx, {

        type: 'line',

        data: {

            labels: ['Mon','Tue','Wed','Thu','Fri','Sat'],

            datasets: [

                {
                    label: 'Download',
                    data: [0,0,0,0,0,0],
                    borderColor: '#f97316',
                    backgroundColor: '#f97316',
                    tension: 0.4
                },

                {
                    label: 'Upload',
                    data: [0,0,0,0,0,0],
                    borderColor: '#e5e7eb',
                    backgroundColor: '#e5e7eb',
                    tension: 0.4
                }

            ]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false
        }

    });

});