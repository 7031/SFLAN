<div class="row">
	<div class="span6">
		<h1>Attendees</h1>
		<br>
	</div>
	<div class="span6 right">
		<?php echo $this->Html->link('Add Attendee', array('controller' => 'attendees', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<div class="row">
	<div class="span6">
		<h2>Table #1</h2>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<th width="45%">Name</th>
				<th width="45%">Nickname</th>
				<th></th>
			</thead>
			<?php 
			foreach ($table0 as $attendee):
			?>
				<tr>
					<td>
						<?php echo h($attendee['Attendee']['name']); ?>
					</td>
					<td>
						<?php echo h($attendee['Attendee']['nickname']); ?>
					</td>
					<td>
						<?php echo $this->Html->link('<i class="icon-pencil black"></i>', array('controller' => 'attendees', 'action' => 'edit', $attendee['Attendee']['slug']), array('escape' => false)); ?>
						<?php echo $this->Form->postLink(
							'<i class="icon-remove black"></i>',
							array('action' => 'delete', $attendee['Attendee']['id']),
							array('confirm' => 'Are you sure?', 'escape' => false)
						);
						?>
					</td>
				</tr>
			<?	
			endforeach;
			?>
		</table>
	</div>
	<div class="span6">
		<h2>Table #2</h2>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<th width="45%">Name</th>
				<th width="45%">Nickname</th>
				<th></th>
			</thead>
			<?php 
			foreach ($table1 as $attendee):
			?>
				<tr>
					<td>
						<?php echo h($attendee['Attendee']['name']); ?>
					</td>
					<td>
						<?php echo h($attendee['Attendee']['nickname']); ?>
					</td>
					<td>
						<?php echo $this->Html->link('<i class="icon-pencil black"></i>', array('controller' => 'attendees', 'action' => 'edit', $attendee['Attendee']['slug']), array('escape' => false)); ?>
						<?php echo $this->Form->postLink(
							'<i class="icon-remove black"></i>',
							array('action' => 'delete', $attendee['Attendee']['id']),
							array('confirm' => 'Are you sure?', 'escape' => false)
						);
						?>
					</td>
				</tr>
			<?	
			endforeach;
			?>
		</table>
	</div>
</div>
<div class="row">
	<div class="span12">
		<h2>Non-existent Table</h2>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<th width="45%">Name</th>
				<th width="45%">Nickname</th>
				<th></th>
			</thead>
			<?php
			foreach ($table2 as $attendee) :
			?>
				<tr>
					<td>
						<?php echo h($attendee['Attendee']['name']); ?>
					</td>
					<td>
						<?php echo h($attendee['Attendee']['nickname']); ?>
					</td>
					<td>
						<?php echo $this->Html->link('<i class="icon-pencil black"></i>', array('controller' => 'attendees', 'action' => 'edit', $attendee['Attendee']['slug']), array('escape' => false)); ?>
						<?php echo $this->Form->postLink(
							'<i class="icon-remove black"></i>',
							array('action' => 'delete', $attendee['Attendee']['id']),
							array('confirm' => 'Are you sure?', 'escape' => false)
						);
						?>
					</td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</div>
</div>