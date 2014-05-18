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
    <div id="masking"></div>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <img src="themes/default/images/logo.png" class="logo" /><a class="brand" href="index.php"><?php echo $sysconf['server']['name']; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
							<?php
              $menus['index'] = array('./index.php', __('Home'));
              $menus['libinfo'] = array('./index.php', __('UCS Information'));

							foreach ($menus as $path => $menu) {
								if (isset($_GET['p']) && $_GET['p'] === $path) {
                  echo '<li class="active"><a href="'.$menu[0].'?p='.$path.'">'.$menu[1].'</a></li>';
								} else if (empty($_SERVER['QUERY_STRING']) && $path === 'index') {
                  echo '<li class="active"><a href="'.$menu[0].'">'.$menu[1].'</a></li>';
								} else {
								  echo '<li><a href="'.$menu[0].'?p='.$path.'">'.$menu[1].'</a></li>';
								}
							}
							?>
							<li><a href="#advSearchModal" role="button" data-toggle="modal"><?php echo __('Advanced search'); ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
					<form class="navbar-form pull-right" name="simpleSearch" action="index.php" method="get">
					<input type="hidden" name="search" value="Search">
					<input type="text" name="keywords" class="search-query" placeholder="Search">
          <select name="node" class="select">
            <?php echo $location_list; ?>
          </select>
					</form>
        </div>
      </div>
    </div>

    <div class="container">

    <!-- advanced search -->
    <div id="advSearchModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="myModalLabel"><?php echo __('Advanced search'); ?></h3>
    </div>
    <div class="modal-body">
    <div class="control-group">
      <label class="control-label" for="inputTitle"><?php echo __('Title'); ?></label>
      <div class="controls"><input type="text" name="title" id="inputTitle" /></div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputAuthors"><?php echo __('Author(s)'); ?></label>
      <div class="controls"><?php echo $advsearch_author; ?></div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputSubjects"><?php echo __('Subject(s)'); ?></label>
      <div class="controls"><?php echo $advsearch_topic; ?></div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputISBN"><?php echo __('ISBN/ISSN'); ?></label>
      <div class="controls"><input type="text" name="isbn" id="inputISBN" /></div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputGMD"><?php echo __('GMD'); ?></label>
      <div class="controls"><select name="gmd" id="inputGMD"><?php echo $gmd_list; ?></select></div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputLocation"><?php echo __('Location'); ?></label>
      <div class="controls"><select name="node" id="inputLocation"><?php echo $location_list; ?></select></div>
    </div>
		</div>
    <div class="modal-footer">
      <input type="submit" class="btn btn-large btn-primary" name="search" value="<?php echo __('Search'); ?>" />
    </div>
		</form>
		</div>


    <div id="main-content" class="well well-small">
		<?php echo $header_info; ?>
		<div class="alert alert-info"><?php echo $info; ?></div>
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
           <form name="langSelect" action="index.php" class="navbar-form pull-right" method="get">
           <select name="select_lang" onchange="document.langSelect.submit();">
           <?php echo $language_select; ?>
           </select>
           </form>
        </div>
      </div>
    </div>

    </div> <!-- /container -->

    <script src="./themes/default/js/supersized.3.1.3.min.js"></script>
    <script src="./themes/default/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    jQuery(function($){
      $.supersized(
      {
          transition		: 6,
          keyboard_nav 	: 0,
          start_slide		: 0,
          vertical_center : 1,
          horizontal_center : 1,
          min_width	: 1000,
          min_height : 700,
          fit_portrait  : 1,
          fit_landscape	: 0,
          image_protect	: 1,
          slides		: [
            { image : 'themes/default/images/1.jpg' },
            { image : 'themes/default/images/2.jpg' }
          ]
      });
    });
    </script>
  </body>
</html>
