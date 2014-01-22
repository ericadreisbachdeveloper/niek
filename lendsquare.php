<?php $meta = 'LendSquare - CSS / jQuery / Bootstrap templates Erica Dreisbach'; $bodytype = 'project lendsquare'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>LendSquare</h1>
    <h2>CSS &bull; jQuery &bull; Bootstrap</h2>
    <p>Site design implemented with lead development team at <a href="http://www.parallactic.com" target="_blank">Parallactic&nbsp;Consulting</a>.</p>
    <p>Design uses <a href="http://www.getbootstrap.com/" target="_blank">Twitter Bootstrap</a> for ease in adaptibility and compatibility across platforms and browsers.</p>
    <p>Implemented adaptive mobile design.</p>
    <input value="VISIT THIS SITE" type="button" id="visit-site">
    <input value="BACK" type="button" id="home" onclick="goBack();">        
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/lendsquare-fullscreen.jpg" alt="LendSquare - Homepage " />
    <img src="img/lendsquare-dashboard.jpg" alt="LendSquare - Dashboard" />
    <img src="img/lendsquare-about.jpg" alt="LendSquare - About" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>

<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.lendsquare.com");	
  }); 	
 });
</script> 
 
<?php include('footer-project.php'); ?>