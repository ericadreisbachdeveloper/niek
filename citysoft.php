<?php $meta = 'CitySoft - redesign implementation by Erica Dreisbach'; $bodytype = 'project citysoft'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>CitySoft</h1>
    <h2>CSS &bull; jQuery &bull; ColdFusion</h2>
    <p>Implemented CSS on site redesign.</p>
    <p>Design includes significant jQuery for menu styling and testimonial slideshow.</p>
    <p>Implemented design on site blog.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/citysoft-home.jpg" alt="CitySoft - Home" />
    <img src="img/citysoft-section.jpg" alt="CitySoft - Section" />
    <img src="img/citysoft-blog.jpg" alt="CitySoft - Blog" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.citysoft.com");	
  }); 	
 });
</script> 
 
<?php include('footer-project.php'); ?> 
 
</body>
</html>