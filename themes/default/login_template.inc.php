<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Union Catalog Server, Library, Catalog, Union Catalog">
    <meta name="author" content="SLiMS, Senayan Developer Community">
		<?php echo $metadata; ?>

    <!-- main styles -->
    <link href="./themes/default/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="./themes/default/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="./themes/default/js/supersized.core.css" rel="stylesheet">
    <link href="./themes/default/style.css" rel="stylesheet">

    <script src="./js/jquery.js"></script>
    <!-- For IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./themes/default/lib/html5.js"></script>
    <![endif]-->

    <!-- favorite and touch icons -->
    <link rel="shortcut icon" href="lib/favicon.ico">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <img src="themes/default/images/logo.png" class="logo" /><a class="brand" href="index.php"><?php echo $sysconf['server']['name']; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
							<li class="active"><a href="index.php"><span><?php echo __('Home'); ?></a></span></li>
            </ul>
          </div><!--/.nav-collapse -->
          <p class="navbar-text pull-right"><?php echo __('Administrator Login'); ?></p>
        </div>
      </div>
    </div>

    <div class="container">
		
    <div id="main-content" class="well well-small">
    <?php echo $main_content; ?>
    </div>

    <!-- footer -->
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
           <p class="navbar-text pull-left"><?php echo $sysconf['server']['subname']; ?></p>
					 <ul class="nav pull-right">
					 <li><a href="http://slims.web.id"><span>SLiMS</span></a></li>
					 </ul>
        </div>
      </div>
    </div>
		
    </div> <!-- /container -->
    <script src="./themes/default/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
