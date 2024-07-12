const body = document.querySelector("body"),
        sidebar = body.querySelector(".sidebar"),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () =>{
            sidebar.classList.toggle("close");
        });
        searchBtn.addEventListener("click", () =>{
            sidebar.classList.remove("close");
        });

        modeSwitch.addEventListener("click", () =>{
            body.classList.toggle("dark");

            if(body.classList.contains("dark")){
                modeText.innerText = "Light Mode"
            }else{
                modeText.innerText = "Dark Mode"
            }

        });
       
      
    
     
      
        var options = {
          series: [{
          name: 'TEAM A',
          type: 'area',
          data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
        }, {
          name: 'TEAM B',
          type: 'line',
          data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        stroke: {
          curve: 'smooth'
        },
        fill: {
          type:'solid',
          opacity: [0.35, 1],
        },
        labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
        markers: {
          size: 0
        },
        yaxis: [
          {
            title: {
              text: 'Series A',
            },
          },
          {
            opposite: true,
            title: {
              text: 'Series B',
            },
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if(typeof y !== "undefined") {
                return  y.toFixed(0) + " points";
              }
              return y;
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
        var options = {
          series: [
          {
            name: 'Actual',
            data: [
              {
                x: '2024',
                y: 700,
                
              }
            ]
          }
        ],
          chart: {
          height: 250,
          type: 'bar'
        },
        plotOptions: {
          bar: {
            columnWidth: '30%'
          }
        },
        colors: ['#ED146f'],
        dataLabels: {
          enabled: false
        },
        
        };

        var chart = new ApexCharts(document.querySelector("#score"), options);
        chart.render();

        var options = {
          series: [2, 32, 7, 0, 1],
          chart: {
          width: 350,
          type: 'pie',
        },
   
        labels: ['Unspecified', 'Positive', 'In Dispute', 'Negative', 'Bureau Letters'],
        responsive: [{
          breakpoint: 400,
          options: {
            chart: {
              width: 100
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#dispute"), options);
        chart.render();