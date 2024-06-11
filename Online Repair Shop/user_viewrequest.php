<?php include 'userheader.php' ?>
 <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
            	<center>
<h1>view request</h1>
<table class="table" style="width: 500px;color: white">
	<tr>
		<th>sino:</th>
		<th>name</th>
		<th>service</th>
		<th>details</th>
		<th>date</th>
		<th>warrantyperiod</th>
		<th>amount</th>
		<th>status</th>
	</tr>
	<?php
$q="select * from request inner join registration using(user_id) inner join myservice using(myservice_id)inner join service using(service_id)";
	$res=select($q);
	$sino=1;
	foreach ($res as $row) {?>
		<tr>
		<td><?php echo$sino++;?></td>
		<td><?php echo$row['firstname'] ?></td>
		<td><?php echo$row['service'] ?></td>
		<td><?php echo$row['details'] ?></td>
		<td><?php echo$row['date'] ?></td>
		<td><?php echo$row['warrantyperiod'] ?></td>
		<td><?php echo$row['amount'] ?></td>
		<td><?php echo$row['status'] ?></td>
		<td><a href="user_addimage.php?rid=<?php echo$row['request_id'] ?>"> add image </a></td>
		<td><a href="user_payment.php?rid=<?php echo$row['request_id'] ?>">make payment</a></td>
		</tr>
	<?php }


	 ?>




</table>
</center>
</div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->




<?php include 'footer.php' ?>