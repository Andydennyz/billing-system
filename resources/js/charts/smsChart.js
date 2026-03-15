import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {

    const ctx = document.getElementById('smsChart');

    if (!ctx) return;

    new Chart(ctx, {

        type: 'line',

        data: {
            labels: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],

            datasets: [
                {
                    label: 'Number of SMS',
                    data: [0,0,0,0,0,0,0],
                    borderColor: '#6366f1',
                    backgroundColor: '#6366f1',
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