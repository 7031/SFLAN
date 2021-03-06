<?php
$Theme = new ThemeFunctions;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title><?php echo $title_for_layout; ?> - SFLAN</title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php echo $Theme->getCss('http://fonts.googleapis.com/css?family=Mako', null, true); ?>
		<?php 
		if ($style == 'light') {
			echo $Theme->getCss('bootstrap.min');
			echo $Theme->getLess('style');	
		} else {
			echo $Theme->getCss('cyborg.min');
			echo $Theme->getLess('style-dark');
		}
		 ?>
		<?php echo $Theme->getCss('font-awesome'); ?>
		 <!--[if IE 7]>
			<link href="/css/font-awesome-ie7.css" rel="stylesheet">
		<![endif]-->
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

		<div class="main-container">
    		<div class="row">
    			<div class="span6">
    				<h1 class="logo"><?php echo $this->Html->Link('SFLAN <small>21.12.2012</small>', array('controller' => 'pages', 'action' => 'view', 'welcome'), array('escape' => false)); ?></h1>
    			</div>
    			<div class="span6">
    				<div class="right">
        				<?php 
        				if ($authUser) {
							echo 'Logged in as ';
    						echo $authUser['username'];
							echo '. ';
							echo $this->Html->Link('Logout', array('controller' => 'users', 'action' => 'logout'));
							echo '.';
    					} else {
    						echo 'Not logged in. ';
							echo $this->Html->Link('Login', array('controller' => 'users', 'action' => 'login'));
							echo ' / ';
							echo $this->Html->Link('Register', array('controller' => 'users', 'action' => 'register'));
							echo '.';
    					}
						echo ' ';
						if ($style == 'light') {
							echo $this->Html->Link('Dark', array('controller' => 'app', 'action' => 'changestyle', 'dark'));
						} else {
							echo $this->Html->Link('Light', array('controller' => 'app', 'action' => 'changestyle', 'light'));
						}
						echo '.';
    					?>
    				</div>
    				<ul class="nav nav-pills pull-right">
    					<li>
    						<?php echo $this->Html->Link('Home', array('controller' => 'pages', 'action' => 'view', 'welcome')); ?>
    					</li>
    					<li>
    						<?php echo $this->Html->Link('Attendees', array('controller' => 'attendees', 'action' => 'index')); ?>
    					</li>
    					<li>
    						<?php echo $this->Html->Link('Games', array('controller' => 'games', 'action' => 'index')); ?>
    					</li>
    					<li>
    						<?php echo $this->Html->Link('Music', array('controller' => 'songs', 'action' => 'index')); ?>
    					</li>
    				</ul>
    			</div>
    		</div>
			<hr class="head">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>

			<hr>
  	 
			<footer>
				<div class="row">
					<div class="span6">
						<p>
							<?php echo $this->Html->Link('Pages', array('controller' => 'pages', 'action' => 'index')); ?> | 
							<?php echo $this->Html->Link('Music', array('controller' => 'songs', 'action' => 'index')); ?> | 
							<?php echo $this->Html->Link('Games', array('controller' => 'games', 'action' => 'index')); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<p>Code is poetry</p>
					</div>
					<div class="span6" style="text-align: right;">
						SFLAN by <a href="http://www.joelnichols.co.uk">Joel Nichols</a>. View source on <a href="https://github.com/7031/SFLAN">Github</a>.
					</div>
				</div>
				<?php if($authUser['role'] == 2) { ?>
				<div class="row">
					<div class="span12">
						<p class="center">Logged in as an administrator. <?php echo $this->Html->Link('List Users', array('controller' => 'users', 'action' => 'index')); ?></p>
					</div>
				</div>
				<?php } ?>
			</footer>

	    </div>


		<?php 
			echo $Theme->getJs('jquery');
			echo $Theme->getJs('bootstrap.min');
			echo $Theme->getJs('less');
		?>
		<script type="text/javascript">
		$('body').tooltip({
			selector: "[rel=tooltip]"
		})
		</script>
		<script>
			$('.thumb-lightbox').click(function(e) {
				e.preventDefault();
				var image_href = $(this).attr("href");
				if ($('#lightbox').length > 0) {
					$('#lbcontent').html('<img src="' + image_href + '">');
					$('#lightbox').show();
				} else {
					var lightbox =
					'<div id="lightbox">' +
						'<p>Click anywhere to close</p>' +
						'<div id="lbcontent">' +
							'<img src="' + image_href + '" class="lbimage">' +
						'</div>' +
					'</div>';
					$('body').append(lightbox);
				}
			});
			$('#lightbox').live('click', function() {
				$('#lightbox').hide();
			});
		</script>
	</body>
</html>
