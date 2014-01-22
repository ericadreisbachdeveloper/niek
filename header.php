<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?php echo($meta); ?>" />

<title><?php if(isset($subtitle)) { echo($subtitle) . ' | '; } ?>erica dreisbach | dream developer</title>	

<script type="text/javascript" src="js/jquery.1.4.4.min.js"> </script>
<script type="text/javascript" src="js/spamspan.js"> </script>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/adaptive.css" />
<link rel="stylesheet" media="print" type="text/css" href="css/print.css" />

<!--[if IE]>
 <link rel="stylesheet" type="text/css" href="css/ie-hacks.css" />
<![endif]-->
		
<link rel="shortcut icon" href="favicon.ico" /> 
<link rel="icon" href="favicon.png" type="image/png" /> 

<!-- fancybox on homepage -->
<?php if(isset($bodytype) && ($bodytype == 'home')) { echo '
<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"> </script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"> </script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"> </script>
<script type="text/javascript" src="js/jquery.easing-1.3.pack.js"> </script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" />' ;} ?>

<!-- project-related scripts on project pages -->
<?php if (isset($bodytype) && (strpos($bodytype,'project') !== false)) { echo '
<script type="text/javascript" src="js/project.js"> </script>' ;} ?>

</head>

<body <?php if(isset($bodytype)) { echo('class="' . $bodytype. '"'); } ?> >

