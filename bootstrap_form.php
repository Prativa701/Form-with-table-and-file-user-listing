<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Bootstrap Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<!--BOOTSTRAP LINK-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>

		.container{
			margin-top: 30px;
			margin-bottom:30px;
		}

	 	h3 {
	  font-size: 30px;
	  font-family: "ElMessiri-SemiBold";
	  text-align: center;
	  margin-bottom: 10px;
	  color: #ff9a9c; }

	  .form-group{
	  	font-size: 10px;
	  }
	  .form-control{
	  	font-size: 10px;
	  }

  </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-6">
				<div class="image-holder">
					<img src="img/girl.jpg" alt="" >
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<h3 class="text-center">Registration Form!!!</h3>
				<hr>

				<form action="file-listing.php" method="POST">
					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Name:</label>
						<div class="col-sm-12 col-md-9">
							<input type="text" name="name" placeholder="Enter Your Name" required="" class="form-control form-control-sm"> 
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Email:</label>
						<div class="col-sm-12 col-md-9">
							<input type="text" name="email" placeholder="Enter Your EmailId" required="" class="form-control form-control-sm"> 
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Password:</label>
						<div class="col-sm-12 col-md-9">
							<input type="password" name="password" required="" class="form-control form-control-sm"> 
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Date Of Birth:</label>
						<div class="col-sm-12 col-md-9">
							<input type="datetime-local" name="dateofbirth" required="" class="form-control form-control-sm"> 
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Gender:</label>
						<div class="col-sm-12 col-md-9">
							<input type="radio" name="gender" value="male"> Male 
							<input type="radio" name="gender" value="female"> Female
							<input type="radio" name="gender" value="other"> Other
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Language:</label>
						<div class="col-sm-12 col-md-9">
							<input type="checkbox" name="lang[]" value="np"> Nepali
							<input type="checkbox" name="lang[]" value="en"> English
							<input type="checkbox" name="lang[]" value="hi"> Hindi
							<input type="checkbox" name="lang[]" value="de"> Deutsch
							<input type="checkbox" name="lang[]" value="ot"> Others
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Place Of Birth:</label>
						<div class="col-sm-12 col-md-9">
							<select name="placeofbirth" id="" class="form-control form-control-sm" required="">
								<option value="" disabled="">--Select Any One--</option>
								<option value="kathmandu" selected="">Kathmandu</option>
								<option value="washinton,dc"> Washington,DC</option>
								<option value="berlin">Berlin</option>
								<option value="newdehli">New Delhi</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">User Type:</label>
						<div class="col-sm-12 col-md-9">
							<select name="role" id="" class="form-control form-control-sm" required="">
								<option value="admin">Administrator</option>
								<option value="user" selected="">User</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">About Yourself:</label>
						<div class="col-sm-12 col-md-9">
							<textarea name="about" id="" style="resize:none;" class="form-control form-control-sm"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12 offset-md-3 col-md-9">
							<button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
							<button type="reset" name="reset" class="btn btn-sm btn-danger">Reset</button>
						</div>
					</div>
				</form>
			</div>
	</div>
</div>
</body>
</html>