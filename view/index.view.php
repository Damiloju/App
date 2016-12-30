<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Home</title>
		<link rel="stylesheet" href="frameworks/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container" style="background-color:black; color:white;margin-top:40px;border: 1px solid gray;border-radius: 7px;-moz-border-radius: 7px;-webkit-border-radius: 7px;box-shadow: 5px 5px 15px #A0A0A0;-moz-box-shadow: 5px 5px 15px #A0A0A0;-webkit-box-shadow: 5px 5px 15px #A0A0A0;">
			<div class="page-header">
			 	<h1>McU Clinic <small>Search App</small></h1>
			</div>

			<div class="col-md-9 col-lg-12" style="margin-top:30px;">
			<form class="form-inline" action="" method="POST">
				  <div class="form-group">
				    	<label for="exampleInputName2">Name</label>
				    		<input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Enter patient name">
				  </div>

				  <div class="form-group"> 
				          <label for="post">Post</label> 
				          	<div class="form-group">
				          	     <select id="post" name="table" class="form-control">
				                	<option>Student</option>
				                	<option>Staff</option>
				                	<option>Outsider</option>
				               	</select>
				          	</div> 
				    </div> 

				     <button type="submit" class="btn btn-primary">Search</button>
			</form>

			 <footer id="footer">
        		<div class="container" style="margin-top:70px;margin-bottom:50px;">
            		<div class="row">
                		<div class="col-sm-6">
                    		&copy; 2016 <a target="_blank" href="http://twitter.com/thatdamiguy/" title="@thatdamiguy">thatdamiguy</a>. All Rights Reserved.
                		</div>
            		</div>
       			 </div>
    		</footer><!--/#footer-->
		</div>

		 <script src="frameworks/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
	</body>
</html>