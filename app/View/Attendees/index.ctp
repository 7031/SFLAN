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
				<th>Name</th>
				<th>Nickname</th>
				<th></th>
			</thead>
			<?php 
			foreach ($attendees as $attendee):
			if ($attendee['Attendee']['table'] == 0) { ?>
				<tr>
					<td width="45%">
						<?php echo $attendee['Attendee']['name']; ?>
					</td>
					<td width="45%">
						<?php echo $attendee['Attendee']['nickname']; ?>
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
			}
			endforeach;
			?>
		</table>
	</div>
	<div class="span6">
		<h2>Table #2</h2>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<th>Name</th>
				<th>Nickname</th>
				<th></th>
			</thead>
			<?php 
			foreach ($attendees as $attendee):
			if ($attendee['Attendee']['table'] == 1) { ?>
				<tr>
					<td width="45%">
						<?php echo $attendee['Attendee']['name']; ?>
					</td>
					<td width="45%">
						<?php echo $attendee['Attendee']['nickname']; ?>
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
			}
			endforeach;
			?>
		</table>
	</div>
</div>