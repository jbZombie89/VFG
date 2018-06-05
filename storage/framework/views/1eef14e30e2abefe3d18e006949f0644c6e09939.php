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
<div class="MainContainer">
<div class="mainBody"><center>
  <div class="welcomeMessage"><h2 id="cMTxt">Veteran Owned and Operated<br><br>Ready for any construction mission</h2></div></center>
</div>

<div class="vfgHighlights">
  <div class="jobsCompleted"><center><h3>Photo Gallery</h3></center></div>
  <div class="reviews"><center><h3>Reviews</h3></center></div>
</div>

<div class="aboutVFG">
<h3>Veterans Flooring Group (VFG) is a licensed and insured general contractor. VFG is owned and operated by veterans. VFG has worked on every type of construction project available. From installing flooring on Ft. Bragg buildings, building custom homes, and renovating residential and commercial spaces, VFG can handle it all. <br><br> Travis Eckhart is the CEO of VFG and has 20+ years in construction. Travis has a reputation for handling the projects that others cant. He is an Army veteran that served his country faithfully. His new mission is to provide AMERICAN craftsmanship to his clients. Travis believes that offering higher quality of service and work will make VFG stand out from all other contractors. <br><br> VFG is organized to subcontract work for large projects or be a subcontractor on larger projects. VFG has worked with companies such as Barton-Mallow to accomplish large scale projects.<br><br> VFG has built the highest quality custom homes in the Ft. Bragg area. If you are looking to build a home, VFG and its team can take you every step of the way. From providing REALTORs to handing you the keys, VFG is there to ensure you get the best service possible.
</div>
</div>
<script>
$(document).on('click', '.menu',function(){
      $('.MenuDrop').toggle();
});

$(document).on('click', '#one',function(){
  var url="http://127.0.0.1:8000/res"
      $('.MainContainer').clear();
      $('.MainContainer').load(url);
});
</script>
</html>
