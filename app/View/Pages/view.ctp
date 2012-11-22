<div class="row">
	<div class="span10">
		<h1><?php echo h($page['Page']['title']); ?></h1>
	</div>
	<div class="span2" style="text-align: right; margin-top: 6px;">
		<p><a href="/pages/edit/<?php echo $page['Page']['slug']; ?>" class="btn"><i class="icon-pencil"></i> Edit</a></p>
	</div>
</div>
<?php echo Markdown($page['Page']['body']); ?>

