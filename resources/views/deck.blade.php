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
  <div class="resMessage" id="deck"><center><h3 id="resMes">Add value to your home with a beautiful deck!</h3></center></div>
  <div class="resServices">
    <center>
      <div class="one" id="D1"><h3 id="contParent">Get a quote for your new deck!</h3>
        <div class="content D1"><h3 id="contChild">A deck can be the newest addition to your home!<br>Adding a deck increases living space and allows you to fully enjoy the great weather of North Carolina!<br><br>VFG can build one new, or update an existing deck. Additionally, there are options for adding lighting, screening in the deck, or even converting it into a sunroom!
        <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
      </div>

      <div class="one" id="D2"><h3 id="contParent">Deck around a pool?</h3>
        <div class="content D2"><h3 id="contChild">Nothing will make your pool more enjoyable than having a deck built around it!<br><br>This will make your home look amazing! <br><br>For an estimate on your job:<br>
        <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
      </div>

      <div class="one" id="D3"><h3 id="contParent">Deck repairs</h3>
        <div class="content D3"><h3 id="contChild">After years being exposed to the elements, decks can start to deteriorate. <br>Before getting the entire deck re-built, call VFG and see if a renovation would be cheaper!<br><br>VFG can repair your deck and stain it to preserve the deck in great condition for as long as possible!
        <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
      </div>

      <div class="one" id="D4"><h3 id="contParent">Tired of deck maintenance?</h3>
        <div class="content D4" id="composite"><h3 id="contChild2">Upgrade your deck from wood flooring to composite flooring!<br><br>This will significantly increase the life span of your deck and keep it looking its best! Call VFG for a quote on installing composite flooring on your deck.<br><br>
        <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
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
