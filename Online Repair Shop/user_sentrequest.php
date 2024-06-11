<?php include 'userheader.php';
extract($_GET);
$lid=$_SESSION['logid'];
if (isset($_POST['request'])) {
	extract($_POST);


echo$q="insert into request values(null,'$lid','$srv','$details',curdate(),'$war','amount_pending','pending')";
insert($q);
alert('insert sucessfully');
return redirect('user_sentrequest.php');
}
	




 ?>
 <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<center>
<h1>sent request</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white" >
		<tr>
			<th>my service</th>
			<td>
				<select name="srv" class="form-control" >
					<option>select</option>
					<?php 
                     $q="select * from myservice inner join service using(service_id)";
                     $res=select($q);
                     foreach ($res as $row) {?>
                     	<option value="<?php echo$row['myservice_id'] ?>"><?php echo$row['service'] ?></option>
                     	
                    <?php  }
					 ?>
					
				</select>
			</td>
		</tr>
		<tr>
			<th>details</th>
			<td><input type="text" name="details" class="form-control"></td>
		</tr>
		
		<tr>
			<th>warrantyperiod</th>
			<td><input type="radio" name="war" value="yes">yes</td>
			<td><input type="radio" name="war" value="no">no</td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="request" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
</div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->




<?php include 'footer.php' ?>