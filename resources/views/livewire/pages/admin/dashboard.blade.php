<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

<div class="flex flex-col md:flex-row gap-5 p-5">
  <div class="card w-full md:w-1/2 bg-base-100 shadow-xl">
    <div class="card-body">
      <div class="flex justify-between">
        <div class="flex flex-col gap-2 w-1/2">
          <h2 class="card-title"><strong>Jumlah Pesanan</strong></h2>
          <div class="flex justify-between items-center">
            <h3 class="text-4xl"><strong>20</strong></h3>
            <img src="{{asset('images/clipboard.png')}}" class="w-10" alt="Clipboard">
          </div>
          <p class="text-xs">21% more than last month</p>
        </div>
        <div class="divider divider-horizontal h-full"></div>
        <div class="w-1/2 gap-2">
          <h2 class="card-title"><strong>Progress</strong></h2>
          <div class="flex gap-2 text-xs md:text-sm">
            <div class="flex flex-col gap-2">
                <div>On progress : 25%</div>
                <div>Compeleted : 25%</div>
            </div>
            <div class="flex flex-col gap-2">
                <div>Pending : 25%</div>
                <div>Cancel : 25%</div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex w-full md:w-1/2 gap-5">
    <div class="card w-1/2 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">Jumlah Karyawan</h2>
        <div class="flex justify-between items-center">
          <h3 class="text-4xl"><strong>30</strong></h3>
          <img src="{{asset('images/user.png')}}" class="w-10" alt="Clipboard">
        </div>
      </div>
    </div>
    <div class="card w-1/2 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">Jumlah Karyawan</h2>
        <div class="flex justify-between items-center">
          <h3 class="text-4xl"><strong>30</strong></h3>
          <img src="{{asset('images/user.png')}}" class="w-10" alt="Clipboard">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flex p-5 w-full gap-5">
  <div class="card w-3/4 bg-base-100 shadow-xl">
    <div class="card-body">
        <canvas id="myChart" class="w-full"></canvas>
    </div>
  </div>
  {{-- <div class="card w-1/4 h-1/2 bg-base-100 shadow-xl">
    <div class="card-body"> --}}
      <a href="/daily-report" class="btn btn-success" target="_blank">Download Daily Report</a>
      
        {{-- <canvas id="pieChart" class="w-1/2 h-1/2"></canvas> --}}
    {{-- </div>
  </div> --}}
</div>

<script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{ 
                data: [86,114,106,106,107,111,133],
                label: "Total",
                borderColor: "rgb(62,149,205)",
                backgroundColor: "rgb(62,149,205,0.1)",
              }, { 
                data: [70,90,44,60,83,90,100],
                label: "Accepted",
                borderColor: "rgb(60,186,159)",
                backgroundColor: "rgb(60,186,159,0.1)",
              }, { 
                data: [10,21,60,44,17,21,17],
                label: "Pending",
                borderColor: "rgb(255,165,0)",
                backgroundColor:"rgb(255,165,0,0.1)",
              }, { 
                data: [6,3,2,2,7,0,16],
                label: "Rejected",
                borderColor: "rgb(196,88,80)",
                backgroundColor:"rgb(196,88,80,0.1)",
              }
            ]
          },
          options: { 
          responsive: true, 
        }
        });
    </script>

<script>
  var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
  var yValues = [55, 49, 44, 24, 15];
  var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
  ];
  
  new Chart("pieChart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "World Wide Wine Production 2018"
      }
    }
  });
  </script>
  
