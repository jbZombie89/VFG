<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="{{asset('js/app.js')}}"></script>
        <title>Veterans Flooring Group, LLC.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/Style.css">
    </head>
@include('../header')

<div class="res">
  <div class="resMessage" id="LVT"><center><h3 id="resMes">Beautiful, High Quality, Durable, Flooring</h3></center></div>
  <div class="resServices">
    <center> <div class="one" id="KK1"><h3 id="contParent">Flooring is our speciality!</h3>
        <div class="content KK1"><h3 id="contChild">Flooring is in our name! VFG is the top flooring installer in the region. <br><br>Having completed the flooring on major commercial projects, such as Ft Bragg's newest training facilities, VFG has a proven track record of success.<br><br> VFG offers a multitude of flooring options such as:<br>- LVT (Luxury Vinyl Tile)<br>- Hardwood flooring<br>- Numerous types of tile <br>- Laminate flooring<br>and more!<br><br>For your hassle free flooring experience
        <center><a href="tel:1-847-504-6767">Call us!</a></center></h3></div>
      </div>

      <div class="one" id="KK2"><h3 id="contParent">Need help choosing flooring?</h3>
          <div class="content KK2"><h3 id="contChild">If you are feeling overwhelmed choosing your new flooring, give us call! <br>We are able to simplify the process and help you get the answers you need!<br><br>Here some questions to ask during the decision making proces...<br>- How long do I want my floors to last?<br>How much traffic will my floors have?<br>How much maintenance will my floors need?<br><br>Give VFG a call and let us get you the flooring you want!
          <center><a href="tel:1-847-504-6767">Call us!</a></center></h3></div>
        </div>

        <div class="one" id="KK3"><h3 id="contParent">What does LVT look like?</h3>
            <div class="content KK3"><div class="lvtF" id="lvt1"></div>
            <div class="lvtF" id="lvt2"></div>
            <div class="lvtF" id="lvt3"></div>
            <a href="tel:1-847-504-6767">Call us!</a>
          </center></h3></div>
          </div>
  </div>
</div>

<script>
$(document).on('click', '.menu',function(){
      $('.MenuDrop').toggle();
});

$(document).on('click', '.one',function(){
    var id = $(this).attr('id');
    $("."+id).toggle();
  });
</script>
