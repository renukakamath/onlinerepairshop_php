<?php include 'shopheader.php';


if (isset($_POST['myservice'])) {
	extract($_POST);
$q="insert into myservice values(null,'$srv','$sho')";
insert($q);
alert('insert sucessfully');
return redirect('shop_managemyservice.php');

}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from myservice where myservice_id='$did'";
	delete($q);
	alert('deleteion sucessfully');
	return redirect('shop_managemyservice.php');

	
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from myservice where myservice_id='$uid'";
	$res=select($q);
}

if (isset($_POST['update'])) {
	extract($_POST);
	$q="update myservice set service='$srv', stop='$sto'";
	update($q);


}

 ?>
 
 <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>my service</h1>
<center>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
	
			<th> service</th>
			<td>
				<select name="srv" class="form-control">
					<option>select</option>
					<?php 
					$q="select *  from service";
					$res=select($q);
					foreach ($res as $row) {

?>	
			<option value="<?php echo $row['service_id'] ?>"><?php echo $row['service'] ?></option>

				<?php
			}

					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>shop</th>
			<td>
				<select name="sho" class="form-control">
					<option>select</option>
					<?php 

                    echo$q="select * from shop";
                    $res=select($q);
                    foreach ($res as $row) {
                    	?>
                    
                  <option value="<?php echo$row['shop_id'] ?>"><?php echo$row['first_name'] ?></option>

                    <?php
                      }


					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="myservice" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
	
</form>
</center>
</div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
<center>
<h1>view myservice</h1>
<table class="table" style="width: 500px">
	<th>sino:</th>
	<th>service</th>
	<th>shop</th>
	<?php 

$q="SELECT * FROM myservice INNER JOIN `service` USING(`service_id`)INNER JOIN shop USING (shop_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $sino++; ?></td>
	<td><?php echo $row['service']; ?></td>
	<td><?php echo $row['first_name'] ;?></td>
	<td><a href="?did=<?php echo $row['myservice_id']; ?>">delete</a></td>
	<td><a href="?uid=<?php echo $row['myservice_id']; ?>">update</a></td>
	
	</tr>
<?php 
 }

	 ?>
</table>
</center>
<?php include 'footer.php' ?>