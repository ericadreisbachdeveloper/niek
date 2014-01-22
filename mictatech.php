<?php $meta = 'MiCTA Tech - CSS / jQuery / ColdFusion work by Erica Dreisbach'; $bodytype = 'project mictatech'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>MiCTA Tech</h1>
    <h2>CSS &bull; jQuery &bull; ColdFusion</h2>
    <p>Wrote + implemented CSS for site redesign.</p>
    <p>Included custom font for page nav and <a href="http://srobbin.com/jquery-plugins/backstretch/" target="_blank">backstretch</a> plugin for jQuery.</p>
    <p>Design by <a href="http://www.goweetu.com" target="_blank">Weetu</a>.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/mictatech-home.jpg" alt="MiCTA Tech - Home" />
    <img src="img/mictatech-section.jpg" alt="MiCTA Tech - Section" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.micatech.org");	
  }); 	
 });
</script> 
 
<?php include('footer-project.php'); ?>