var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // el tipo de grafico que queremos
    type: 'line',

    // Los datos de los graficos
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Clientes registrados",
            backgroundColor: '#4FBCFA',
            borderColor: '#000000',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    
    options: {}
});



var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // el tipo de grafico que queremos
    type: 'bar',

    // Los datos de los graficos
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Productos vendidos",
            backgroundColor: '#FFE01E',
            borderColor: '#000000',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

   
    options: {}
});
var ctx = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx, {
    // el tipo de grafico que queremos
    type: 'bar',

  // Los datos de los graficos
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Empleados removidos",
            backgroundColor: '#26A509',
            borderColor: '#000000',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

   
    options: {}
});



var ctx = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx, {
    // el tipo de grafico que queremos
    type: 'line',

   // Los datos de los graficos
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Productos que llegan",
            backgroundColor: '#D14B4B',
            borderColor: '#000000',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    
    options: {}
});