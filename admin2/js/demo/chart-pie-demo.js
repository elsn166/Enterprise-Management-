// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [50, 30, 20],
      backgroundColor: ['#20c997', '#ffdf00', '#dc3545'], //1st color before 5 years, 2nd after 5 years, 3rd over 10 years
      hoverBackgroundColor: ['#1aa179', '#ffcd39', '#b02a37'],
      hoverBorderColor: "rgba(255, 255, 255, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});



// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost:81/admin-panel/js/demo/chart-pie-demo.js",
//         method: "GET",
//         success: function(data) {
//           console.log(data);
//         },
//         error: function(data){
//             console.log(data);
//         }
//     });
// });