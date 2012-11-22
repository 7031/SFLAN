<?php
global $controller;
global $pageid;
$controller = $this->params['controller'];

if ( $controller == "pages" ) {
	$pageid = $page['Page']['id'];
}

function headerNav($navpage) {
	global $controller;
	global $pageid;
	$output = "";
	if ( $controller == "pages" ) {
		if ( $navpage == $pageid ) {
			$output = ('class="active"');
		}
	}
	elseif ( $controller == $navpage ) {
		$output = ('class="active"');
	}
	else {
		$output = "";
	}
	return $output;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?> - SausageFest LAN</title>
    <meta name="description" content="">
    <meta name="author" content="">
	<meta content="authenticity_token" name="csrf-param" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/global.css" rel="stylesheet">


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
<? /*
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://sflan.stuzzgaming.com/">SausageFest</a>

			<ul class="nav">
				<li <?php echo headerNav('1'); ?>><a href="http://sflan.stuzzgaming.com">Home</a></li>
				<li <?php echo headerNav('2'); ?>><a href="http://sflan.stuzzgaming.com/pages/2">People</a></li>
				<li <?php echo headerNav('songs'); ?>><a href="http://sflan.stuzzgaming.com/songs/">Music</a></li>
				<li <?php echo headerNav('games'); ?>><a href="http://sflan.stuzzgaming.com/games/">Games</a></li>
			</ul>		  
		  
        </div>
</div></div>
*/ ?>

    <div class="container main">

		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>

		<hr>
   
		<footer>
			<div class="row">
				<div class="span6">
					<p><a href="http://sflan.stuzzgaming.com/pages">Pages</a> | <a href="http://sflan.stuzzgaming.com/songs/">Songs</a> | <a href="http://sflan.stuzzgaming.com/games/">Games</a></p>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<p>&copy; SausageFest 2012</p>
				</div>
				<div class="span6" style="text-align: right;">
					Site by <a href="http://www.stuzzhosting.com" rel="tooltip" title="StuzzHosting is Best Hosting">Joel Nichols</a>.
				</div>
			</div>

		</footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="/js/jquery.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	$('body').tooltip({
		selector: "[rel=tooltip]"
	})
	</script>
  </body>
</html>
