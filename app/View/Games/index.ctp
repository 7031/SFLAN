<div class="row">
	<div class="span6">
		<h1>All Games</h1>
		<br />
	</div>
	<div class="span6" style="text-align: right;">
		<?php echo $this->Html->link('Add Game', array('controller' => 'games', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<table class="table table-bordered table-striped">
	<thead>
		<th width="70%">Name</th>
		<th>Filesize</th>
	</thead>
	
	<?php foreach ($games as $game): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($game['Game']['name'], array('controller' => 'games', 'action' => 'view', $game['Game']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['filesize']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<div class="row">
	<div class="span6">
		&nbsp;
	</div>
	<div class="span6" style="text-align: right;">
		<?php echo $this->Html->link('Add Game', array('controller' => 'games', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>