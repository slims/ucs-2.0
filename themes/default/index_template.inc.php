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
							<li class="active"><a href="index.php"><span><?php echo __('Home'); ?></a></span></li>
							<li><a href="index.php?p=libinfo"><span><?php echo __('UCS Information'); ?></span></a></li>
							<li><a href="#advSearchModal" role="button" data-toggle="modal"><?php echo __('Advanced search'); ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
					<form class="navbar-form pull-right">
					<input type="text" class="search-query" placeholder="Search">
          <select name="node" class="select">
            <?php echo $location_list; ?>
          </select>
					</form>
        </div>
      </div>
    </div>

    <div class="container">

    <!-- advanced search -->
    <div class="modal hide" id="advSearchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="adv-search-form" action="index.php" method="get">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel"><?php echo __('Advanced Search'); ?></h3>
		</div>
		<div class="modal-body">
    <input type="hidden" name="advsearch" value="1" />
    <input type="hidden" name="p" value="search" />
		<table>
			<tr>
				<td class="value">
				<?php echo __('Title'); ?>
				</td>
				<td class="value">
				  <input type="text" name="title" />
				</td>
				<td class="value">
				<?php echo __('Author(s)'); ?>
				</td>
				<td class="value">
				  <input type="text" name="author" />
				</td>
			</tr>
			<tr>
				<td class="value">
				<?php echo __('Subject(s)'); ?>
				</td>
				<td class="value">
				<input type="text" name="subject" />
				</td>
				<td class="value">
				<?php echo __('ISBN/ISSN'); ?>
				</td>
				<td class="value">
					<input type="text" name="isbn" />
				</td>
			</tr>
			<tr>
				<td class="value">
					<?php echo __('Location'); ?>
				</td>
				<td class="value" colspan="3">
					<select name="node" class="full-width">
          <?php echo $location_list; ?>
					</select>
				</td>
			</tr>
		</table>
		</div>
    <div class="modal-footer">
      <a href="#" class="btn btn-primary"><?php echo __('Search'); ?></a>
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
