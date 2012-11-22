<?php
$Theme = new ThemeFunctions;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?> - SausageFest LAN</title>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo $Theme->getCss('http://fonts.googleapis.com/css?family=Mako', null, true); ?>
    <?php echo $Theme->getCss('bootstrap.min'); ?>
    <?php echo $Theme->getLess('style'); ?>
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

		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>

		<hr>
   
		<footer>
			<div class="row">
				<div class="span6">
					<p>
						<?php echo $this->Html->link('Pages', array('controller' => 'pages', 'action' => 'index')); ?> | 
						<?php echo $this->Html->link('Songs', array('controller' => 'songs', 'action' => 'index')); ?> | 
						<?php echo $this->Html->link('Games', array('controller' => 'games', 'action' => 'index')); ?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<p>&copy; SausageFest 2012</p>
				</div>
				<div class="span6" style="text-align: right;">
					Site by <a href="http://www.joelnichols.co.uk">Joel Nichols</a>.
				</div>
			</div>

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
  </body>
</html>
