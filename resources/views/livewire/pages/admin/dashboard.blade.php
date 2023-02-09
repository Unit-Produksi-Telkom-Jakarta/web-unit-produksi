<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

<div class="flex justify-center">
    <div class="flex gap-2">
        <div class="stats shadow my-5">
            <div class="stat">
              <div class="stat-figure text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
              </div>
              <div class="stat-title">Jumlah Pesanan</div>
              <div class="stat-value text-primary">12</div>
              <div class="stat-desc">21% more than last month</div>
            </div>
            <div class="stat">
              <div class="stat-title">Progress</div>
              <div class="stat-desc font-bold text-md">
                <div class="flex gap-2">
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
          <div class="stats shadow my-5">
            <div class="stat">
              <div class="stat-figure text-primary">
                <svg class="svg-icon" viewBox="0 0 20 20"><circle fill="none" cx="7.884" cy="11.397" r="0.699"></circle><circle fill="none" cx="12.076" cy="11.397" r="0.699"></circle><path fill="none" d="M17.685,5.808c-0.257,0-0.502,0.053-0.73,0.139C16.64,2.737,13.649,0.219,10,0.219c-3.649,0-6.64,2.518-6.955,5.728c-0.228-0.086-0.473-0.139-0.73-0.139c-1.153,0-2.096,0.943-2.096,2.096v3.493c0,1.153,0.943,2.096,2.096,2.096c0.28,0,0.547-0.058,0.792-0.158c0.113,1.088,0.304,1.795,0.585,2.254c0.539,0.834,4.139,4.192,6.288,4.192c2.149,0,5.751-3.361,6.272-4.167c0.292-0.476,0.488-1.196,0.602-2.296c0.255,0.112,0.536,0.175,0.831,0.175c1.153,0,2.096-0.943,2.096-2.096V7.904C19.781,6.751,18.838,5.808,17.685,5.808zM15.078,14.855c-0.482,0.746-3.715,3.529-5.099,3.529s-4.616-2.783-5.097-3.525c-0.319-0.521-0.444-1.919-0.489-3.297c0.004-0.055,0.017-0.108,0.017-0.164V8.603c0-0.04,0.005-0.078,0.006-0.118C4.779,8.56,5.156,8.603,5.545,8.603c1.994,0,3.706-1.037,4.455-2.519c0.749,1.482,2.461,2.519,4.455,2.519c0.389,0,0.766-0.043,1.128-0.118c0.001,0.039,0.006,0.078,0.006,0.118c0,0.077-0.008,0.152-0.012,0.229C15.598,10.276,15.641,13.938,15.078,14.855z"></path></svg>
              </div>
              <div class="stat-title">Jumlah Karyawan</div>
              <div class="stat-value text-primary">30</div>
            </div>
          </div>
    </div>
</div>
<div class="flex justify-center">
    <div class="w-[800px]">
        <canvas id="myChart"></canvas>
    </div>
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
        });
    </script>

<style>
    .svg-icon {
  width: 2rem;
  height: 2rem;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #570DF8;
}

.svg-icon circle {
  stroke: #570DF8;
  stroke-width: 1;
}
</style>
