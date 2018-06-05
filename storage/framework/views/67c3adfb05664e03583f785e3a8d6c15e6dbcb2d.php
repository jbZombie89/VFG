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
  <div class="resMessage" id="commercial"><center><h3 id="resMes">On schedule, on-budget, and to the highest standards of craftsmanship.</h3></center></div>
  <div class="resServices">
    <center><div class="one" id="CC1"><h3 id="contParent">Hire VFG for your Commercial Project</h3>
      <div class="content CC1"><h3 id="contChild">-Commercial building construction<br>
      -Commercial building renovation<br>
      -Show room flooring<br>
      <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
    </div>
    <div class="one" id="CC2"><h3 id="contParent">Subcontract VFG for your projects</h3>
      <div class="content CC2" ><h3 id="contChild">- Experienced and Qualified persons for most projects<br>
      - Speed without sacrificing quality<br>
      - Guarenteed Quality of Work<br>
      <center><a href="tel:1-847-504-6767">Call us!</a><center></h3></div>
    </div>
    <div class="one" id="CC3"><h3 id="contParent">Become a subcontractor for VFG</h3>
      <div class="content CC3"><h3 id="contChild">- Seeking to partner with experienced:<br>
      - Plumbers<br>
      - Electricians<br>
      - Steel Framers<br><br>
      Call us to schedule a meeting. We are always looking new partners to participate in our projects.<br>
      When we meet please be prepared for the following topics:<br>
      1.) How long you have been in business and current work load / capacity<br>
      2.) Capabilities statement<br>
      3.) Reccommendations from previous projects<br>
      <center><a href="tel:1-847-504-6767">Call to subcontract with VFG today!</a></center></h3></div>
    </div>

    <div class="one" id="CC4"><h3 id="contParent">Apply to work for VFG</h3>
      <div class="content CC4"><h3 id="contChild">- Seeking experienced:<br>
      - Plumbers<br>
      - Electricians<br>
      - Framers<br>
      - Laborers<br>
      - Drywall<br><br>
      Call us to schedule an interview. Be prepared with your resume which should include:<br>
      1.) Work experience and time in each<br>
      2.) Valid drivers license<br>
      3.) Applicable certifications<br>
      4.) Prior employer reccomendation letter<br>
      <center><a href="tel:1-847-504-6767">Call to schedule an interview!</a></center></h3></div></div></center>
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
