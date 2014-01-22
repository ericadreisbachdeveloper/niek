<?php $meta = 'Nearby Registry - CSS / jQuery / ColdFusion work by Erica Dreisbach'; $bodytype = 'project nearby'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Nearby Registry</h1>
    <h2>CSS &bull; ColdFusion &bull; jQuery</h2>
    <p>Worked with a team of UX designers at Merit System Services on a website that promotes local businesses through a unique online registry interface.</p>
    <p>Significant styling and implementation work in jQuery, ColdFusion, and CSS.</p>
    <p>Built and added modal windows and <a href="http://www.starplugins.com/cloudzoom" target="_blank">Cloud Zoom</a>. Implemented social media modules for Twitter and Facebook.</p>
    <p>Maintained version control amongst a team spread across the country using <a href="http://subversion.apache.org/" target="_blank">Subversion</a>.</p>
    <p>Design by <a href="http://youngathenians.com/" target="_blank">Young Athenians</a>.</p>
   <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/nearby-home.jpg" alt="Nearby Registry - Home" />
    <img src="img/nearby-biz-page.jpg" alt="Nearby Registry - Business page" />
    <img src="img/nearby-item-page.jpg" alt="Nearby Registry - Item page" />
    <img src="img/nearby-modal.jpg" alt="Nearby Registry - Modal window" />
    <img src="img/nearby-the-sweetness.jpg" alt="Nearby Registry - Item page" />
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