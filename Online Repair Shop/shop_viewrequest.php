<?php include 'shopheader.php';

if (isset($_GET['sid'])) {
	extract($_GET);

	$q="update request set status='work completed' where request_id='$sid'";
	update($q);
	alert('sucessfully');
	return redirect('shop_viewrequest.php');
}



 ?>
  <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<center>
<form method="post">
<h1>view request</h1>
<table class="table" style="width: 500px;color: white">
<tr>
		<th>sino:</th>
		<th>user</th>
		<th>service</th>
		<th>details</th>
		<th>date</th>
		<th>amount</th>
		<th>warrantyperiod</th>
		<th>status</th>
	</tr>
	<?php 
$q="select * from request inner join registration using(user_id) inner join myservice using (myservice_id)
inner join service using (service_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {
	?>
	<tr>
		<th><?php echo$sino++; ?></th>
		<th><?php echo$row['firstname'] ?><?php echo $row['lastname'] ?></th>
		<th><?php echo$row['service'] ?></th>
		<th><?php echo$row['details']; ?></th>
		<th><?php echo $row['date'];?></th>
		
		<?php 
         if ($row['warrantyperiod']=='no' and $row['amount']=="amount_pending") {
         ?>
         	

         	<td><a href="shop_amount.php?rid=<?php echo$row['request_id'] ?>">add amount</a></td>
        <?php 
         }
         else
         {

		 ?>
		 		<td><?php echo $row['amount']; ?></td>

		 	<?php 
		 }
		 	 ?>

		 <th><?php echo$row['warrantyperiod']; ?></th>
		<th><?php echo$row['status']; ?></th>
		<th><a href="?sid=<?php echo $row['request_id'] ?>">update status</a></th>
		<th><a href="shop_viewimage.php?rid=<?php echo$row['request_id']; ?>">view image</a></th>
		
	</tr>
<?php  }




	 ?>



</table>
</form>
</center>
</div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->


<?php include 'footer.php' ?>