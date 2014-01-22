<?php $meta = 'Korean Community Center of the East Bay - web design + development by Erica Dreisbach'; $bodytype = 'project kcceb'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>KCCEB</h1>
    <h2>CSS &bull; jQuery &bull; design</h2>
    <p>Created design to client spec, including homepage jQuery slideshows for images and stats.</p>
    <p>Built section page templates and site graphics.
    <p>Implemented design and migrated content on ColdFusion-based CMS.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/kcceb-home.jpg" alt="KCCEB - Home" />
    <img src="img/kcceb-section.jpg" alt="KCCEB - Section" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>
 
<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.kcceb.org");	
  }); 	
 });
</script>  
 
<?php include('footer-project.php'); ?>