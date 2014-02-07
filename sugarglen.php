<?php $meta = 'Sugar Glen Farm - Wordpress theme design by Erica Dreisbach'; $bodytype = 'project sugarglen'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Sugar Glen Farm</h1>
    <h2>design &bull; Wordpress &bull; CSS &bull; jQuery</h2>
    <p>Wordpress blog theme built for (full disclosure) my mom.</p>
    <p>Design includes adaptive/mobile styling and custom image header.</p>
    <p>CSS built with <a href="http://sass-lang.com/" target="_blank">SASS</a> framework.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/sugarglen-fullscreen.jpg" alt="Sugar Glen - Home" />
    <img src="img/sugarglen-iphone.jpg" alt="Sugar Glen - Mobile" />
    <img src="img/sugarglen-june.jpg" alt="Sugar Glen - Blog" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>
 
<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://sugarglenfarm.com");	
  }); 	
 });
</script>  
 
<?php include('footer-project.php'); ?>