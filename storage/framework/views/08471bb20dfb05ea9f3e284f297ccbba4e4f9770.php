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
  <div class="resMessage"><center><h3 id="resMes">Build your dream home with VFG!</h3></center></div>
  <div class="resServices">
    <center>
      <div class="one" id="D4"><h3 id="contParent">Build a home with VFG</h3>
        <div class="content D4"><h3 id="contChild">VFG has built many custom homes for clients! Our team is able to accomplish every aspect of a home build, from REALTORs, to breaking ground, to handing you the keys.<br><br>If you are ready to build your dream home give VFG a call and see how we can turn your dream into a reality!<br><br>
        <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
      </div>

      <div class="one" id="D5"><h3 id="contParent">Home renovations</h3>
        <div class="content D5" ><h3 id="contChild">Are you looking to buy a home as a "fixer upper"?<br><br> We love DIY persons and are here to help!<br><br>When you need an experienced professional for items such as electrical, plumbing, or HVAC, VFG will be ready to help you get past that hurdle!<br><br>You're a hardworking person that loves to accomplish challeges... but even the best of us bite of more than we can chew on occasion!<br>Don't let you project slow down, call VFG and let us help you in completing your goals.<br><br>
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
