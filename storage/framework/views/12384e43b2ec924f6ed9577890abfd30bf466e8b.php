<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <title>Veterans Flooring Group, LLC.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/Style.css">
    </head>
<?php echo $__env->make('../header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="res">
  <div class="resMessage" id="kitchen"><center><h3 id="resMes">Beautiful kitchens you will love!</h3></center></div>
  <div class="resServices">
    <center><div class="one" id="KK1"><h3 id="contParent">Kitchen renovations</h3>
      <div class="content KK1"><h3 id="contChild">Having renovated hundreds of kitchens, VFG is your top choice when you want to upgrade!<br><br>A modern kitchen is one of the top ways to increase home value. Market trends show that a renovated kitchen can add up to $40,000 to your homes value!<br><br>Renovation does not have to break the bank!<br>In some instances a "face lift" is all thats needed to add value. Simply changing your cabinet handles, installing lighting, and modern backsplash can give you the look you want!<br><br>If you are ready to WOW your visitors with a beautiful kitchen:
      <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
    </div>

    <div class="one" id="KK2"><h3 id="contParent">Kitchen builds</h3>
      <div class="content KK2"><h3 id="contChild">Are you looking to build a home and not satisfied with your builders kitchen design?<br><br>Advocate for yourself and call VFG to have us work with your builder to give you the kitchen you dreamed of!<br>VFG has built many kitchens from scratch with phenominal results!<br><br>If you are completely dissatified with your builder, switch to VFG!
      <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
    </div>

    <div class="one" id="KK3"><h3 id="contParent">Kitchen Lighting</h3>
      <div class="content KK3"><h3 id="contChild">Every great kitchen has carefully planned and placed lighting. <br>When cooking a fantastic meal, proper lighting will help with all your prep and ensure you have the best environment to create your culinary masterpiece!<br><br>VFG can design the layout and install the lighting necessary for the profesional kitchen you always wanted. 
      <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
    </div>







    </center>
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
