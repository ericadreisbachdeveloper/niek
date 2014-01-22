<?php $meta = 'Acelero - CSS / jQuery / ColdFusion work by Erica Dreisbach'; $bodytype = 'project acelero'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Acelero</h1>
    <h2>CSS &bull; jQuery &bull; ColdFusion</h2>
    <p>Implemented in CSS, HTML, ColdFusion, and jQuery.</p>
    <p>Homepage slideshow built with <a href="http://www.slidesjs.com/" target="_blank">slidesjs</a> plugin for jQuery.</p>
    <p>Includes three subsites with custom navigation.</p>
    <p>Design by <a href="http://www.taraframer.com/" target="_blank">Tara Framer</a>.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/acelero-fullscreen.jpg" alt="Acelero - Home" />
    <img src="img/acelero-section.jpg" alt="Acelero - Section" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>
 
<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.acelero.com");	
  }); 	
 });
</script>  
 
<?php include('footer-project.php'); ?> 

</body>
</html>