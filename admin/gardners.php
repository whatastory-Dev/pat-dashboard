<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/admin_header.php');
include('includes/admin_sidebar.php');
<<<<<<< HEAD
$sql ="SELECT * FROM garden  LEFT JOIN location ON  garden.location_id = location.location_id
        LEFT JOIN   gardner ON garden.garden_id = gardner.garden_id ORDER BY garden.garden_id desc";
=======
<<<<<<< HEAD
$sql ="SELECT * FROM garden  LEFT JOIN location ON  garden.location_id = location.location_id
        LEFT JOIN   gardner ON garden.garden_id = gardner.garden_id ORDER BY garden.garden_id desc";
=======
<<<<<<< HEAD
$sql ="SELECT * FROM gardner  LEFT JOIN 
          garden ON gardner.garden_id = garden.garden_id ORDER BY garden.garden_id desc";
=======
$sql ="SELECT * FROM garden  LEFT JOIN location ON  garden.location_id = location.location_id
        LEFT JOIN   gardner ON garden.garden_id = gardner.garden_id ORDER BY garden.garden_id desc";
>>>>>>> 1f5f483e373d4990fdcc2a47cfc9fff211a48684
>>>>>>> 48dc9843f423dffc5e4bf296119edff653a9487f
>>>>>>> 764904d957e0900e3c00295ec590f066f84911b0
$query=$dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
?>
<div class="row">
<?php if($_SESSION['error']!="")
{?>
<div class="col-md-6">
<div class="alert alert-danger" >
 <strong>Error :</strong> 
 <?php echo htmlentities($_SESSION['error']);?>
<?php echo htmlentities($_SESSION['error']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['msg']!="")
{?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['msg']);?>
<?php echo htmlentities($_SESSION['msg']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['updatemsg']!="")
{?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['updatemsg']);?>
<?php echo htmlentities($_SESSION['updatemsg']="");?>
</div>
</div>
<?php } ?>


<?php if($_SESSION['delmsg']!="")
 {?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['delmsg']);?>
<?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
</div>
<?php } ?>

</div>

		<div class="page-wrapper">
            <div class="container-fluid">				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Gardner's</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>Gardner's</span></a></li>
						<!-- <li class="active"><span>RSPV DataTable</span></li> -->
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Gardner's</h6>
								</div>
								<a href="add_gardner.php" class="pull-right btn btn-primary btn-xs mr-15">Add New</a>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="">
											<table id="myTable1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>#</th>
														<th>Gardner Name</th>
														<th>Garden</th>
														<th>Phone number</th>
<<<<<<< HEAD

														<th>status</th>
														<th>action</th>


														<th>status</th>
														<th>action</th>

=======
<<<<<<< HEAD
														<th>status</th>
														<th>action</th>

=======
<<<<<<< HEAD
														<th>status</th>
														<th>action</th>
=======
>>>>>>> 1f5f483e373d4990fdcc2a47cfc9fff211a48684
>>>>>>> 48dc9843f423dffc5e4bf296119edff653a9487f
>>>>>>> 764904d957e0900e3c00295ec590f066f84911b0
														<th>Updates</th>
													</tr>
												</thead>												
												<tbody>
													<?php 	
													$cnt=1;
													if($query->rowCount() > 0)
													{
													foreach($results as $result)
													{               ?>   
													<tr>
														 <td class="center"><?php echo htmlentities($cnt);?></td>
														<td class="center"><?php echo htmlentities($result->gardner_fname);?><?php echo htmlentities($result->gardner_lname);?></td>
															<td class="center"><?php echo htmlentities($result->garden_name);?></td>
															<td class="center"><?php echo htmlentities($result->gardner_pnumber);?></td>
													
								
<<<<<<< HEAD


														<td class="center"><?php if($result->gardner_status==1) {?>

														<td class="center"><?php if($result->gardner_status==1) {?>

														<td class="center"><?php if($result->garden_status==1) {?>

=======
<<<<<<< HEAD

														<td class="center"><?php if($result->gardner_status==1) {?>
=======
<<<<<<< HEAD
														<td class="center"><?php if($result->gardner_status==1) {?>
=======
														<td class="center"><?php if($result->garden_status==1) {?>
>>>>>>> 1f5f483e373d4990fdcc2a47cfc9fff211a48684
>>>>>>> 48dc9843f423dffc5e4bf296119edff653a9487f
>>>>>>> 764904d957e0900e3c00295ec590f066f84911b0
			                                            <a href="#" class="btn btn-success btn-xs"><span class="label label-success">Active</a>
			                                            <?php } else {?>
			                                            <a href="#" class="btn btn-danger btn-xs"><span class="label label-danger">Inactive</a>
			                                            <?php } ?></td>
														<td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
													</tr>
													 <?php $cnt=$cnt+1;}} ?>												
												</tbody>
											
												<tfoot>
													<tr>
														<th>#</th>
														<th>Gardner Name</th>
														<th>Garden</th>
														<th>Phone number</th>
														<th>status</th>
														<th>action</th>
														<th>Updates</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			
			</div>	
	
<?php
include('includes/admin_footer.php');?>	