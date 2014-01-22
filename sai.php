<?php $meta = 'Social Accountability International - web development by Erica Dreisbach'; $bodytype = 'project sai'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">  
    <h1>SAI</h1>     
    <h2>CSS &bull; jQuery &bull; ColdFusion</h2> 
    <p>Implemented design in CSS, HTML, ColdFusion, and jQuery.</p>
    <p>Includes homepage slideshow using <a href="http://www.slidesjs.com/" target="_blank">slidesjs</a> plugin for jQuery.</p>
    <p>Implementation includes seven separate homepage modules that client can update via CMS.</p>
    <p>Design by <a href="http://www.terpsys.com/" target="_blank">TerpSys</a>.</p>
    <input value="VISIT THIS SITE" type="button" id="visit-site">
    <input value="BACK" type="button" id="home" onclick="goBack();">       
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/sai-fullscreen.jpg" alt="SAI - homepage" />
    <img src="img/sai-section.jpg" alt="SAI - section page" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.nearbyregistry.com");	
  }); 	
 });
</script> 
 
<?php include('footer-project.php'); ?>