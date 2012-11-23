<div class="row">
	<div class="span6">
		<h1>Music</h1>
	</div>
	<div class="span6" style="text-align: right;">
	<?php echo $this->Html->link('Play all', array('controller' => 'songs', 'action' => 'play'), array('class' => 'btn')); ?>
	<?php echo $this->Html->link('Add Song', array('controller' => 'songs', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<th style="width: 45%">Title</th>
		<th style="width: 45%">Artist</th>
		<th style="width: 10%">Listen</th>
		<th></th>
	</thead>
	<?php foreach ($songs as $song): ?>
	<tr>
		<td><?php echo h($song['Song']['title']); ?></td>
		<td><?php echo h($song['Song']['artist']); ?></tD>
		<td><?php echo $this->Html->link('Listen', array('controller' => 'songs', 'action' => 'view', $song["Song"]["id"])); ?></td>
		<td><?php echo $this->Html->link('<i class="icon-pencil black"></i>', array('controller' => 'songs', 'action' => 'edit', $song["Song"]["id"]), array('escape' => false)); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<div class="row">
	<div class="span9">
		&nbsp;
	</div>
	<div class="span3" style="text-align: right;">
		<?php echo $this->Html->link('Play all', array('controller' => 'songs', 'action' => 'play'), array('class' => 'btn')); ?>
		<?php echo $this->Html->link('Add Song', array('controller' => 'songs', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>