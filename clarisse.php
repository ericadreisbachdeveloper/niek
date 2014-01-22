<?php $meta = 'Clarisse Thorn - web design + development by Erica Dreisbach'; $bodytype = 'project clarisse'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <div class="text info float-left">
    <h1>Clarisse Thorn</h1>
    <h2>Wordpress &bull; CSS &bull; jQuery &bull; design</h2>
    <p>Custom design referencing the <a href="http://theme.wordpress.com/themes/fresh-and-clean/" target="_blank">Fresh&nbsp;+&nbsp;Clean</a> Wordpress template.</p>
    <p>Implemented jQuery slideshow and social media icons in header.</p>
    <p>Customized blogging template features, including: titles, social media modules, time stamps, and comments.</p>
    <input value="VISIT THIS SITE" id="visit-site" type="button">
    <input value="BACK" type="button" id="home" onclick="goBack();">      
   </div><!-- .text.info.float-left -->
   
   <div class="text workbox float-right">
    <img src="img/clarisse-fullscreen.jpg" alt="Clarisse Thorn - homepage" />
    <img src="img/clarisse-blog.jpg" alt="Clarisse Thorn - blog" />
   </div><!-- .text.workbox.float-right -->
  
  </div><!-- .table -->
 </div><!-- .table.padded-cell -->
</section>
 
<script type="text/javascript">
 $(document).ready(function(){
  $('#visit-site').click(function(){
   window.open("http://www.clarissethorn.com");	
  }); 	
 });
</script>  
 
<?php include('footer-project.php'); ?> 

</body>
</html>