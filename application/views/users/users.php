<div class="row marketing">
    <div class="col-lg-12">
<span class="pull-right"><a href="<?php echo base_url('users/new_user');?>" class="btn btn-sm btn-primary">New User</a></span><br/>
<table class="table ">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Functions</th>
	</tr>

<?php foreach($users as $result => $user){ ?>
	<tr>
		<td>
			<?php echo $user['id']; ?>
		</td>
		<td>
			<?php echo $user['name']; ?>
		</td>
		<td>
			<?php echo $user['username'];?>
		</td>
		<td>	
			<?php echo $user['email']; ?>
		</td>
		<td>
			<a href="<?php echo base_url('users/edit_user'). '/' . $user['id']; ?>" class="btn btn-success btn-xs" title="Edit User"><span class="glyphicon glyphicon-pencil"></span></a> 
			<a href="<?php echo base_url('users/change_password'). '/' . $user['id']; ?>" class="btn btn-primary btn-xs" title="Change Password"><span class="glyphicon glyphicon-lock"></span></a> 
			<a href="<?php echo base_url('users/delete_user'). '/' . $user['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to delete this user?')" title="Delete User"><span class="glyphicon glyphicon-trash"></span></a>
		</td>			
	</tr>
<?php } ?>
</table>

</div>
</div>