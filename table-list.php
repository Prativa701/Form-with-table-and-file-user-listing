<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Listing</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class ="text-center">List of Users</h3>
				<hr>
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th>S.N.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Of Birth</th>
							<th>Gender</th>
							<th>Language</th>
							<th>Place of Birth</th>
							<th>User Type</th>
							<th>About Yourself</th>
						</tr>
					</thead>
					<tbody>
				       <?php 
							$file_name = "file-listing.json";
							
							if(file_exists($file_name)){
								// content in file, maybe
								$file_data = file_get_contents($file_name);
								$aa = json_decode($file_data, true);

								if(count($aa)){
									// users do exists
									$aa = array_reverse($aa);

									foreach($aa as $key => $user_data){
										?>
										<tr>
											<td><?php echo $key+1 ?></td>
											<td><?php echo $user_data['name'] ?></td>
											<td><?php echo $user_data['email'] ?></td>
											<td><?php echo $user_data['dateofbirth'] ?></td>
											<td><?php echo $user_data['gender'] ?></td>
											<td><?php echo implode(", ", $user_data['lang']) ?></td>
											<td><?php echo $user_data['placeofbirth'] ?></td>
											<td><?php echo $user_data['role'] ?></td>
											<td><?php echo $user_data['about'] ?></td>
										</tr>
										<?php
									}
								}  else {
									echo "File empty.";
								}
							} else {
								echo "File does not exists.";
							}

						?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>