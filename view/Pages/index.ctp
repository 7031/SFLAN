<div class="row">
	<div class="span6">
		<h1>All pages</h1>
	</div>
	<div class="span6 right">
		<?php echo $this->Html->link('Add Page', array('controller' => 'pages', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<table class="table table-bordered table-striped">
	<thead>
		<th width="80%">Title</th>
		<th width="15%">Created</th>
		<th></th>
	</thead>
	
	<?php foreach ($pages as $page): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($page['Page']['title'], array('controller' => 'pages', 'action' => 'view', $page['Page']['slug'])); ?>
		</td>
		<td>
			<?php echo $page['Page']['created']; ?>
		</td>
		<td>
			<?php echo $this->Html->link('<i class="icon-pencil black"></i>', array('controller' => 'pages', 'action' => 'edit', $page['Page']['slug']), array('escape' => false)); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<div class="row">
	<div class="span6">
		&nbsp;
	</div>
	<div class="span6" style="text-align: right;">
		<?php echo $this->Html->link('Add Page', array('controller' => 'pages', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>