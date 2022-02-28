
var ctx =document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: _ydata,
    datasets: [{ 
        data: _xdata,
        label: "Registration",
        borderColor: "#3e95cd",
        fill: false,
        
      }
    ]
  },
  options: {
    title: {
      display: true,
      time:{
          unit :'month'
      },
     
    }
  }
});