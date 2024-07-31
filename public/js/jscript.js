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
       
        function myFunction() {
          var x = document.getElementById("cmspass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    
        fetch('/clients-data')
        .then(response => response.json())
        .then(data => {
            var options = {
                series: [{
                    name: 'All Clients',
                    type: 'area',
                    data: data.allClients
                }, {
                    name: 'New Clients',
                    type: 'line',
                    data: data.newClients
                }],
                chart: {
                    height: 350,
                    type: 'line',
                },
                stroke: {
                    curve: 'smooth'
                },
                fill: {
                    type: 'solid',
                    opacity: [0.35, 1],
                },
                colors: ['#ED146f', 'rgb(241, 225, 129)'],
                dataLabels: {
                    enabled: false
                },
                labels: data.labels,
                markers: {
                    size: 0
                },
                yaxis: [
                    {
                        title: {
                            text: 'All Clients',
                        },
                    },
                    {
                        opposite: true,
                        title: {
                            text: 'New Clients',
                        },
                    },
                ],
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function (y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " Clients";
                            }
                            return y;
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#clientgraph"), options);
            chart.render();
        })
        .catch(error => console.error('Error fetching data:', error));
      
        // var options = {
        //   series: [{
        //   name: 'All Clients',
        //   type: 'area',
        //   data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 53, 33]
        // }, {
        //   name: 'New Clients',
        //   type: 'line',
        //   data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 44, 43]
        // }],
        //   chart: {
        //   height: 350,
        //   type: 'line',
        // },
        // stroke: {
        //   curve: 'smooth'
        // },
        // fill: {
        //   type:'solid',
        //   opacity: [0.35, 1],
        // }, colors: ['#ED146f','rgb(241, 225, 129)'],
        // dataLabels: {
        //   enabled: false
        // },
        // labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        // markers: {
        //   size: 0
        // },
        // yaxis: [
        //   {
        //     title: {
        //       text: 'All Clients',
        //     },
        //   },
        //   {
        //     opposite: true,
        //     title: {
        //       text: 'New Clients',
        //     },
        //   },
        // ],
        // tooltip: {
        //   shared: true,
        //   intersect: false,
        //   y: {
        //     formatter: function (y) {
        //       if(typeof y !== "undefined") {
        //         return  y.toFixed(0) + " points";
        //       }
        //       return y;
        //     }
        //   }
        // }
        // };

        // var chart = new ApexCharts(document.querySelector("#clientgraph"), options);
        // chart.render();
      
      
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
          width: 330,
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



        var chart = JSC.chart('equifax', {
          debug: true,
          type: 'gauge ',
          legend_visible: false,
          chartArea_boxVisible: false,
          xAxis: {
            /*Used to position marker on top of axis line.*/
            scale: { range: [0, 1], invert: true }
          },
          palette: {
            pointValue: '%yValue',
            ranges: [
              { value: 300, color: '#FF0000' },
              { value: 500, color: '##FFF000' },
              { value: 700, color: '#77E6B4' },
              { value: [800, 900], color: '#008000' }
            ]
          },
          yAxis: {
            defaultTick: { padding: 13, enabled: false },
            customTicks: [500,700,800, 900],
            line: {
              width: 20,
              breaks_gap: 0.03,
              color: 'smartPalette'
            },
            scale: { range: [300, 900] }
          },
          defaultSeries: {
            opacity: 1,
            shape: {
              label: { align: 'center', verticalAlign: 'middle' }
            }
          },
          series: [
            {
              type: 'marker',
              name: 'Score',
              shape_label: { //edit here
                text: "<span style='font-weight:600'>680</span><br/> <span style='fontSize: 15'>Great!</span><br/><img src='../img/equifax.png' width='60px'",
                style: { fontSize: 20 }
              },
              defaultPoint: {
                tooltip: '%yValue',
                marker: {
                  outline: { width: 10, color: 'currentColor' },
                  fill: 'white',
                  type: 'circle',
                  visible: true,
                  size: 20
                }
              },
              points: [[1, 680]] //edit here
            }
          ]
        });
        
        var chart = JSC.chart('experian', {
          debug: true,
          type: 'gauge ',
          legend_visible: false,
          chartArea_boxVisible: false,
          xAxis: {
            /*Used to position marker on top of axis line.*/
            scale: { range: [0, 1], invert: true }
          },
          palette: {
            pointValue: '%yValue',
            ranges: [
              { value: 300, color: '#FF0000' },
              { value: 500, color: '##FFF000' },
              { value: 700, color: '#77E6B4' },
              { value: [800, 900], color: '#008000' }
            ]
          },
          yAxis: {
            defaultTick: { padding: 13, enabled: false },
            customTicks: [500,700,800, 900],
            line: {
              width: 20,
              breaks_gap: 0.03,
              color: 'smartPalette'
            },
            scale: { range: [300, 900] }
          },
          defaultSeries: {
            opacity: 1,
            shape: {
              label: { align: 'center', verticalAlign: 'middle' }
            }
          },
          series: [
            {
              type: 'marker',
              name: 'Score',
              shape_label: {
                text: "<span style='font-weight:600'>650</span><br/> <span style='fontSize: 15'>Great!</span><br/><img src='../img/experian.png' width='70px'",
                style: { fontSize: 20 }
              },
              defaultPoint: {
                tooltip: '%yValue',
                marker: {
                  outline: { width: 10, color: 'currentColor' },
                  fill: 'white',
                  type: 'circle',
                  visible: true,
                  size: 20
                }
              },
              points: [[1, 650]]
            }
          ]
        });
        
        var chart = JSC.chart('transunion', {
          debug: true,
          type: 'gauge ',
          legend_visible: false,
          chartArea_boxVisible: false,
          xAxis: {
            /*Used to position marker on top of axis line.*/
            scale: { range: [0, 1], invert: true }
          },
          palette: {
            pointValue: '%yValue',
            ranges: [
              { value: 300, color: '#FF0000' },
              { value: 500, color: '##FFF000' },
              { value: 700, color: '#77E6B4' },
              { value: [800, 900], color: '#008000' }
            ]
          },
          yAxis: {
            defaultTick: { padding: 13, enabled: false },
            customTicks: [500,700,800, 900],
            line: {
              width: 20,
              breaks_gap: 0.03,
              color: 'smartPalette'
            },
            scale: { range: [300, 900] }
          },
          defaultSeries: {
            opacity: 1,
            shape: {
              label: { align: 'center', verticalAlign: 'middle' }
            }
          },
          series: [
            {
              type: 'marker',
              name: 'Score',
              shape_label: {
                text: "<span style='font-weight:600'>620</span><br/> <span style='fontSize: 15'>Great!</span><br/><img src='../img/transunion.png' width='60px'",
                style: { fontSize: 20 }
              },
              defaultPoint: {
                tooltip: '%yValue',
                marker: {
                  outline: { width: 10, color: 'currentColor' },
                  fill: 'white',
                  type: 'circle',
                  visible: true,
                  size: 20
                }
              },
              points: [[1, 620]]
            }
          ]
        });