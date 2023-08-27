<!--
<div class="mt-8" style="position:relative;">
                <div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden">
                    <div class="current-weather flex items-center justify-between px-4 py-6">
                        <div class="flex items-center justify-between px-4 py-6">
                    <div class="flex items-center">
                        <div>
                            <div class="text-gray-500" style="font-size:30px;color: #f71ed3;">{{ round($currentWeather['main']['temp'])}}&#176;C</div>
                            <div class="text-gray-400" style="color: #f71ed3;">Feels like {{ round($currentWeather['main']['feels_like'])}}&#176;C</div>
</div>
<div class="ml-5">
                            <div class="text-gray-500"></div>
                            <div class="text-gray-400" style="position:relative;left:10px;color: #f71ed3;">Cazin</div>
</div>
</div>
<div>
    <img src="https://openweathermap.org/img/wn/{{$currentWeather['weather'][0]['icon']}}@4x.png" alt="icon" style="height:150px;width:150px;">
</div>
</div>
</div>
</div>
</div>-->



<div class="w-64 cursor-pointer border b-gray-400 rounded flex flex-col justify-center items-center text-center p-2 bg-white" style="width:400px;height:300px;">
<div style="position:fixed;left:600px;width:500px;justify-content:center; ">
<p>Udruženje Pomozi.ba je neprofitna humanitarna organizacija koja svojim djelovanjem pomaže ugroženoj djeci na području cijele Bosne i Hercegovine, ali i šire.</p>
</div>
  <div class="text-md font-bold flex flex-col text-gray-900"><span class="uppercase" style="color: #f71ed3;">Cazin</span> <span class="font-normal text-gray-700 text-sm"></span></div>
  <div class="w-32 h-32 flex items-center justify-center">
    <svg class="h-20" viewBox="0 0 81 73" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Desktop-HD" transform="translate(-174.000000, -308.000000)" fill-rule="nonzero">
                <img src="https://openweathermap.org/img/wn/{{$currentWeather['weather'][0]['icon']}}@4x.png" alt="icon" style="height:150px;width:150px;position: absolute;">
            </g>
        </g>
    </svg>
  </div>
  <br>
  <p class="text-gray-700 mb-2" style="color: #f71ed3;">{{ round($currentWeather['main']['temp'])}}&#176;C</p>
  <div class="text-3xl font-bold text-gray-900 mb-6" style="color: #f71ed3;">Feels like {{ round($currentWeather['main']['feels_like'])}}&#176;C</div>
  <div class="flex justify-between w-full">
    <div class="flex items-center text-gray-700 px-2">
      <svg class="mr-2 h-4" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Desktop-HD" transform="translate(-120.000000, -479.000000)" fill="#60A2D7" fill-rule="nonzero">
                  <g id="Group" transform="translate(95.000000, 222.000000)">
              </g>
          </g>
<div>

</div>
</div>
  </div>

