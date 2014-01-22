<script type="text/javascript" src="js/retina-1.1.0.js"> </script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"> </script>

<!-- 'teach' IE to create and style HTML5 semantic elements -->
<script>
 document.createElement("nav");
 document.createElement("section");
 document.createElement("footer");
</script>

<!-- add serif class to double quotes for to make curly-pretty -->
<script type="text/javascript">
 var text = document.body.innerHTML;
 var str = text.replace(/\u201C/g, '<span class="serif">&ldquo;</span>').replace(/\u201D/g, '<span class="serif">&rdquo;</span>');  
 document.body.innerHTML = str;
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47393701-1', 'ericadreisbach.com');
  ga('send', 'pageview');
</script>

</body>
</html>