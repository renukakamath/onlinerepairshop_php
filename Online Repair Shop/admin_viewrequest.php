<?php include 'adminheader.php' ?>
 <div class="page-banner home-banner mb-5" style="height: 2000px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">

<h1>view request</h1>
<table class="table" style="width: 500px;color: white">
<tr>
		<th>sino:</th>
		<th>user name</th>
		<th>service</th>
		<th>details</th>
		<th>date</th>
		<th>warrantyperiod</th>
		<th>amount</th>
		<th>status</th>
	</tr>
	<?php 
$q="select * from request inner join registration using (user_id) inner join myservice using (myservice_id) inner join service using (service_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {?>
	<tr>
		<th><?php echo$sino++ ?></th>
		<th><?php echo$row['firstname'] ?> <?php echo$row['lastname'] ?></th>
		<th><?php echo$row['service'] ?></th>
		<th><?php echo$row['details']; ?></th>
		<th><?php echo $row['date']?></th>
		<th><?php echo$row['warrantyperiod']?></th>
		<th><?php echo$row['amount']; ?></th>
		<th><?php echo$row['status']; ?></th>
		<th><a href="admin_viewpayments.php?rid=<?php echo $row['request_id'] ?>">view payments</a></th>
		
	</tr>
<?php  }




	 ?>



</table>
 </div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->

<?php include 'footer.php' ?>
