<?php $meta = 'Savory Living - web design + development by Erica Dreisbach'; $bodytype = 'project savory'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Savory Living</h1>
    <h2>design &bull; CSS &bull; jQuery &bull; mobile &bull; ColdFusion &bull; Wordpress &bull; SEO</h2>  
    <p>Four rounds of concept design on homepage, section pages, and blog.</p>
    <p>Site uses jQuery Cycles for slideshow and rotating testimonials. Client is able to easily update both from within the CMS.</p>
    <p>Adaptive mobile design uses Javascript and CSS.</p>
    <input value="VISIT THIS SITE" type="button" id="visit-site">
    <input value="BACK" type="button" id="home" onclick="goBack();">       
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/savory-fullscreen.jpg" alt="Savory Living" />
    <img src="img/savory-blog.jpg" alt="Savory Living - Blog" />
    <img src="img/savory-paywall.jpg" alt="Savory Living - Paywall" />
    <img src="img/savory-mobile.jpg" alt="Savory Living - Mobile" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.savoryliving.com");	
  }); 	
 });
</script> 

<?php include('footer-project.php'); ?> 
 
</body>
</html>