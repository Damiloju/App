<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Results</title>
		<link rel="stylesheet" href="frameworks/bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<link id="bootstrap-style" href="frameworks/css/bootstrap.min.css" rel="stylesheet">
		<link href="frameworks/css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<table class="table table-striped table-bordered table-hover bootstrap-datatable datatable">
				<a href="index.php"><h1>Patient Details</h1></a>    
					<thead>    
					   <tr>   
					   		<th>S/N</th>
					        <th>Name</th>
					        <th>Patient Class</th>  
					        <th>Registration Year</th>
					        <th>Card No</th>      
					    </tr>    
					</thead>   
					<tbody>  
						<?php foreach ($details as $detail) :?>
							<tr>
								<th><?= $sn; $sn++;?></th>
								<th><?=  $detail->name;?></th>
								<th><?= $table_name;?></th>
								<th><?= $detail->reg_year;?></th>
								<th><?= $detail->card_no;?></th>
							</tr>
						<?php endforeach;?>
					</tbody> 
			</table> 
			
			 <footer id="footer">
        		<div class="container">
            		<div class="row">
                		<div class="col-sm-6">
                    		&copy; 2016 <a target="_blank" href="http://twitter.com/thatdamiguy/" title="@thatdamiguy">thatdamiguy</a>. All Rights Reserved.
                		</div>
            		</div>
       			 </div>
    		</footer><!--/#footer-->
		</div>

	
		<script src="frameworks/js/jquery-1.9.1.min.js"></script>
		<script src="frameworks/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="frameworks/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="frameworks/js/jquery.ui.touch-punch.js"></script>
		<script src='frameworks/js/jquery.dataTables.min.js'></script>
		<script src="frameworks/js/jquery.chosen.min.js"></script>
		<script src="frameworks/js/jquery.uniform.min.js"></script>
		<script src="frameworks/js/jquery.cleditor.min.js"></script>
		<script src="frameworks/js/jquery.elfinder.min.js"></script>
		<script src="frameworks/js/jquery.raty.min.js"></script>
		<script src="frameworks/js/jquery.uploadify-3.1.min.js"></script>
		<script src="frameworks/js/custom.js"></script>
		<script src="frameworks/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
	</body>
</html>
