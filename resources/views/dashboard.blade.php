<x-app-layout>


<div class="sliderAx h-auto" style="width:1535px;">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://i.pinimg.com/564x/18/ed/df/18eddf060b3be33252db676e27a71507.jpg)">
       <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase"></p>
        <p class="text-3xl font-bold"></p>
        <br>
        <br>
        <p class="text-2xl mb-10 leading-none">Imamo samo ono što damo.</p>
        <p ><i>Isabel Alende</i></p>
        <br>
        <br>
        <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800"></a>
        </div>
    </div>
      <br>
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://i.pinimg.com/564x/f7/1b/a9/f71ba975e9d15a7852c6feef3abd9f40.jpg)">

  <br>
  <br>
  <p class="text-2xl mb-10 leading-none">Imamo samo ono što damo.</p>
        <p ><i>Isabel Alende</i></p>
        <br>
        <br>
        <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800"></a>

    </div>
      <br>
      </div>
    </div>
 <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
  </div>
  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <x-weather-widget  :currentWeather="$currentWeather"  />

            </div>
        </div>
    </div>

</x-app-layout>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;

        break;
        }
        case 1:
        {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");

        cont=0;

        break;
        }


        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0

    }

    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1

    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");


        loopSlider();






    });


  </script>
