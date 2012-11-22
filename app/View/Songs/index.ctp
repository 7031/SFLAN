<div class="row">
	<div class="span6">
		<h1>Songs</h1>
		<br />
	</div>
	<div class="span6" style="text-align: right;">
	<a href="http://sflan.stuzzgaming.com/songs/play" class="btn">Play all</a> 
	<?php echo $this->Html->link('Add Song', array('controller' => 'songs', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<table class="table table-bordered table-striped">
	<thead>
		<th width="45%">Title</th>
		<th width="45%">Artist</th>
		<th width="10%">Listen</th>
		<th></th>
	</thead>
	
	<?php foreach ($songs as $song): ?>
	<tr>
		<td><?php echo h($song['Song']['title']); ?></td>
		<td><?php echo h($song['Song']['artist']); ?></tD>
		<td><a href="http://sflan.stuzzgaming.com/songs/view/<?php echo $song['Song']['id']; ?>">Listen</a></td>
		<td><a href="http://sflan.stuzzgaming.com/songs/edit/<?php echo ($song['Song']['id']);?>" ><i class="icon-pencil"></i></a></td>
	</tr>
	<?php endforeach; ?>
</table>
<div class="row">
	<div class="span9">
		&nbsp;
	</div>
	<div class="span3" style="text-align: right;">
		<a href="http://sflan.stuzzgaming.com/songs/play" class="btn">Play all</a> 
		<?php echo $this->Html->link('Add Song', array('controller' => 'songs', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>