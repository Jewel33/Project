<!DOCTYPE html>
<html>
<head>
	<title></title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-inverse navbar-light bg-light shadow">

		<a class="navbar-brand" href="#">Company Name</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">

  			<ul class="navbar-nav mr-2 list-unstyled">

		      <li class="nav-item mr-2 active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>

			  <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          House Rent
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Mess</a>
		          <a class="dropdown-item" href="#">Flat</a>
		      </li>

		      <li class="nav-item mr-2">
		        <a class="nav-link" href="#">Tution</a>
		      </li>
		       

 			</ul>
			 <button class="d-inlie btn btn-outline-primary"><a href="index.html">Logout</a></button>

  		</div>

	</nav>

	<!-- Slider Section Start Here -->
	

	<!-- Jumbotron -->

	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<form>
					<table>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" value="Name"></td>
						</tr>
						<tr>
							<td>Division</td>
							<td>                   
							 <div class="block">
                        
                       			 <select  id="division" name="division" style=" padding:8px;" required="1">
		                            <option value="" selected="selected">Select Division</option>
		                            <?php
		                            $q = "SELECT * FROM division";
		                            $res = $db->select($q);
		                            if(mysqli_num_rows($res) > 0){
		                                while($rows = mysqli_fetch_array($res)){
		                                    ?>
                            
		                            <option value="<?php echo $rows['div_id']; ?>"><?php echo $rows['div_name']; ?></option>
		                            
				                  <?php
		                                    
		                                }
		                            }
		                                
		                            ?>
		                            

		                        </select>
                        	</div>
							</td>
						</tr>
						<tr>
							<td>District</td>
							<td>
							<div class="block">
                        
                       			 <select  id="division" name="division" style=" padding:8px;" required="1">
		                            <option value="" selected="selected">Select Division</option>
		                            <option value="">hjghjgj</option>
		                            <option value="">jhhjhgj</option>
		                            <option value="">jjhgjhg</option>
		                  
		                        </select>
                        	</div></td>
						</tr>
						<tr>
							<td>Upazila</td>
							<td>
								<div class="block">
                        
                       			 <select  id="division" name="division" style=" padding:8px;" required="1">
		                            <option value="" selected="selected">Select Division</option>
		                            <option value="">hjghjgj</option>
		                            <option value="">jhhjhgj</option>
		                            <option value="">jjhgjhg</option>
		                  
		                        </select>
                        	</div>
							</td>
						</tr>
						<tr>
							<td>Area</td>
							<td><input type="text" name="area" value=""></td>
						</tr>
						<tr>
							<td>House</td>
							<td><input type="text" name="house" value=""></td>
						</tr>
						<tr>
							<td>House Type</td>
							<td><input type="text" name="houseType" value=""></td>
						</tr>
						<tr>
							<td>Available Month</td>
							<td><input type="text" name="month" value="Month Name"></td>
						</tr>
						<tr>
							<td>Rent</td>
							<td><input type="text" name="rent" value=""></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="file" name="image" value=""></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type="text" name="descrip" value="Name"></td>
						</tr>
						<tr>
							<td></td>
							<td><input  class="btn btn-outline-primary" type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
		    						 		
 			</div>
 			<div class="col-md-5">
				
			</div>
		</div>

	</div>

	

</body>
</html>