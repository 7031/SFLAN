<h1>Users</h1>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<th>Username</th>
		<th>Email address</th>
		<th>Role</th>
		<th></th>
	</thead>
	<?php foreach ($users as $user): ?>
		<tr>
			<td>
				<?php echo h($user['User']['username']); ?>
			</td>
			<td>
				<?php echo h($user['User']['email']); ?>
			</td>
			<td>
				<?php echo h($user['User']['role']); ?>
			</td>
			<td>
				
			</td>
		</tr>
	<?php endforeach; ?>
</table>
