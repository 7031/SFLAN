<div class="row">
	<div class="span6">
		<h1><?php echo h($game['Game']['name']); ?></h1>
	</div>
	<div class="span6" style="text-align: right; margin-top: 6px;">
		<p><?php echo $this->Html->link('<i class="icon-pencil"></i>Edit', array('controller' => 'games', 'action' => 'edit', $game['Game']['slug']), array('escape' => false, 'class' => 'btn')); ?></p>
	</div>
</div>
<div class="row">
	<div class="span6">
			<h2>Info <small>You can probably ignore this</small></h2>
			<table class="table table-bordered table-striped">
				<tr>
					<td>
						<strong>CPU:</strong>
					</td>
					<td width="100%">
						<?php echo h($game['Game']['cpu']);?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>RAM:</strong>
					</td>
					<td width="100%">
						<?php echo h($game['Game']['ram']);?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Graphics:</strong>
					</td>
					<td width="100%">
						<?php echo h($game['Game']['graphics']);?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>OS:</strong>
					</td>
					<td width="100%">
						<?php echo h($game['Game']['os']);?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Filesize:</strong>
					</td>
					<td width="100%">
						<?php echo h($game['Game']['filesize']);?>
					</td>
				</tr>
			</table>
			<?php if (($game['Game']['download']) !== '') { ?>
				<a href="<?php echo h($game['Game']['download']);?>" class="btn btn-primary btn-large btn-block">Download <?php echo h($game['Game']['name']);?></a>
			<? }  else { ?>
				<a href="#" class="btn btn-primary btn-large btn-block disabled">Download Not Available</a>
			<? } ?>
	</div>
	<div class="span6">
		<?php if (($game['Game']['screenshot']) !== '') { ?>
			<a href="<?php echo h($game['Game']['screenshot']); ?>" class="thumbnail"><img src="<?php echo h($game['Game']['screenshot']);?>"></a>
		<?php } else { ?>
			<a href="#" class="thumbnail"><img src="/img/not-available.jpg"></a>
		<?php } ?>
	</div>
</div>

<h2>About <?php echo ($game['Game']['name']);?></h2>
<?php echo Markdown($game['Game']['description']); ?>

