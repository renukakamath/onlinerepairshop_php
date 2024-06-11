<?php include 'adminheader.php';

if (isset($_POST['service'])) {
	extract($_POST);

	$q="insert into service values(null ,'$srv')";
	insert($q);
	alert('insertion sucessfully');
	return redirect('admin_manageservice.php');
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from service where service_id='$did'";
	delete($q);
	alert('deletion sucessfully');
	return redirect('admin_manageservice.php');
}

if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from service where service_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update service set service='$srv' where  service_id='$uid'";
	update($q);
	alert('updation successfully');
	return redirect('admin_manageservice.php');
}

 ?>

  <div class="page-banner home-banner mb-5" >
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
             
<center>         
<h1>Manage Service</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>service</th>
			<td><input type="text" name="srv" value="<?php echo$res[0]['service']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php }else{ ?>
	<table class="table" style="width: 500px;">
		<tr>
			<th>service</th>
			<td><input type="text" name="srv"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="service" value="submit"></td>
		</tr>
	</table>
<?php } ?>
</form>
 </div>
          </div>
         
         
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
    </center>
<center>

<H1>View service</H1>
<form method="post">
<table class="table" style="width: 500px;">
	<tr>
		<th>sino:</th>
		<th>service</th>
	</tr>
	<?php 
$q="select * from service";
$res=select($q);
$sino=1;
 foreach ($res as $row) {?>
 	<tr>
 		<td><?php echo$sino++; ?></td>
 		<td><?php echo$row['service']; ?></td>
 		<td><a href="?did=<?php echo$row['service_id'];?>">delete</a></td>
 		<td><a href="?uid=<?php echo$row['service_id']; ?>">update</a></td>
 	</tr>
 	
 <?php  }
?>
		
	</table>
</form>
</center>
 
<?php include 'footer.php' ?>