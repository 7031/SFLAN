<div class="row">
	<div class="span10">
		<h1><?php echo h($page['Page']['title']); ?></h1>
	</div>
	<div class="span2" style="text-align: right; margin-top: 6px;">
		<p><?php echo $this->Html->link('<i class="icon-pencil"></i> Edit', array('action' => 'edit', $page['Page']['slug']), array('escape' => false, 'class' => 'btn')); ?></p>
	</div>
</div>
<?php echo Markdown($page['Page']['body']); ?>

