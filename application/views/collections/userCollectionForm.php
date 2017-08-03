<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<br>

<div class="page-header" >
  <h1>Garbage and Recycling Collection Notification</h1>
</div>

<div style= "width:50%; margin:auto; padding-top:5%;">
	<form id="CollectionNotificationForm" action="#" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="inputFName" class="control-label col-xs-2">First Name</label>
			<div class="col-xs-10">
				<input type="text" class="form-control" id="inputFname" name="inputFname" placeholder="First Name">
			</div>
		</div>
		<div class="form-group">
			<label for="inputLName" class="control-label col-xs-2">Last Name</label>
			<div class="col-xs-10">
				<input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="Last Name">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail" class="control-label col-xs-2">Email</label>
			<div class="col-xs-10">
				<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				What type of collection they want to be notified about?
				<br>
				<div class="radio">
					<label class="radio-inline"><input type="radio" name="GarbOrRecyOpt" value="1" id="Recycling" />Recycling</label>
					<label class="radio-inline"><input type="radio" name="GarbOrRecyOpt" value="2" id="Garbage" />Garbage</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				When would you like to receive your email Notification?
				<br>
				<div class="radio">
					<label class="radio-inline"><input type="radio" name="12Or24Hrs" value="1" id="24Hrs"/>24 hours prior</label>
					<label class="radio-inline"><input type="radio" name="12Or24Hrs" value="2" id="12Hrs" />12 hours prior</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>