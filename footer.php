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

</body>
</html>