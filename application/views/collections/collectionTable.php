 
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="page-header" >
	   <h1>Collection Notification Schedule</h1>
	</div>
	<br>
	<div class="table-responsive">          
	<table class="table">
	<thead>
	  <tr>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Collection Type</th>
		<th>Notification Prior</th>
	  </tr>
	</thead>
	<tbody>

	<?php  
	/**@var $usersCollectionData users  */
	foreach ($usersCollectionData as $user){ ?>
		<tr>
			<td><?=$user->userid; ?></td>
			<td><?=$user->firstname; ?></td>
			<td><?=$user->lastname; ?></td>
			<td><?=$user->email;?> </td>
			<td><?=$user->type; ?></td>
			<td><?=$user->remindertime; ?> Hours</td>
		</tr>	
	<?php } ?>

	</tbody>
	</table>
	</div>
</div>

</body>
</html>