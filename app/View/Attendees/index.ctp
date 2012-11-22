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
			</thead>
			<?php 
			foreach ($attendees as $attendee):
			if ($attendee['Attendee']['table'] == 1) { ?>
				<tr>
					<td>
						<?php echo $attendee['Attendee']['name']; ?>
					</td>
					<td>
						<?php echo $attendee['Attendee']['nickname']; ?>
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
			</thead>
		</table>
	</div>
</div>