<!DOCTYPE html>
<html>

<head>
  <title><?php echo $titre; ?></title>
  <meta name="title" content="<?php echo $titre; ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <link rel=stylesheet href="css/defaut.css" type="text/css" />
  
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/additional-methods.min.js"></script>
  
  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox -->
  <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.0.6"></script>

  <!-- Optionally add helpers - button, thumbnail and/or media -->
  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>

</head>

<body>
<header>
  <div id="spinner" class="spinner" style="display:none;">
	 <img id="img-spinner" src="images/ajax-loader.gif" alt="Loading"/>
  </div>
</header>