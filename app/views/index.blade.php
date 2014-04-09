<html>
	<head>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</head>
	<body>

		<div class="container" style="margin-top:100px;">
			<div class="row">
				{{Form::open(array("url"=>"/send"))}}
				<div class="col-xs-6">
					<input type="text" class="form-control" name="message"/>
				</div>
				<div class="col-xs-6">
					<button class="btn btn-success" type="submit">Send</button>
				</div>
				{{Form::close()}}
			</div>
		</div>

	</body>
</html>