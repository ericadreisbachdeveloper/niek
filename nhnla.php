<?php $meta = 'NHNLA - Web Development by Erica Dreisbach'; $bodytype = 'project nhnla'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>NHNLA</h1>
    <h2>CSS &bull; jQuery &bull; ColdFusion</h2>
    <p>Site redesign CSS + implementation.</p>
    <p>Produced CSS and implemented on ColdFusion CMS.</p>
    <p>Added ColdFusion scripts for unique section page banners.</p>
    <p>Built custom modules on homepage that client can update via CMS.</p>
    <p>Design by <a href="http://www.goweetu.com" target="_blank">Weetu</a>.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">       
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/nhnla-home.jpg" alt="NHNLA - Home" />
    <img src="img/nhnla-section.jpg" alt="NHNLA - Section" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>
 
<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.nhnla.org");	
  }); 	
 });
</script>  
 
<?php include('footer-project.php'); ?> 

</body>
</html>