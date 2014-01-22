<?php $meta = 'Wilmington Ballet - web design + development by Erica Dreisbach'; $bodytype = 'project wilmington'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Wilmington Ballet <span class="small">Academy of the Dance</span></h1>
    <h2>Wordpress &bull; design &bull; CSS &bull; jQuery &bull; SEO</h2>
    <p>Custom theme built in Wordpress. Includes three page templates.</p>
    <p>Content migration and optimization for search.</p>
    <p>Design includes sticky footer, lightbox gallery, and Google map toggle in the footer powered by jQuery.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/wilmington-fullscreen.jpg" alt="Wilmington Ballet - Home" />
    <img src="img/wilmington-pilates.jpg" alt="Wilmington Ballet - Pilates" />
    <img src="img/wilmington-gallery.jpg" alt="Wilmington Ballet - Image Gallery" />
    <img src="img/wilmington-map.jpg" alt="Wilmington Ballet - Google map toggle" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.wilmingtonballet.odf");	
  }); 	
 });
</script> 

<?php include('footer-project.php'); ?>