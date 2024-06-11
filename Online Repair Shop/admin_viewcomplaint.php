<?php include 'adminheader.php'?>
<div class="page-banner home-banner mb-5" style="height: 2000px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>view complaint</h1>
<center>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>sino:</th>
			<th>Username</th>
			<th>complaint</th>
			<th>date</th>
			<th>reply</th>
			
	<?php 

	$q="select *  from complaint inner join registration using (user_id)";
	$res=select($q);
	$sino=1;

foreach ($res as $row) {?>

	<tr>
		<td><?php echo$sino++ ?></td>
		<td><?php echo$row['firstname'] ?><?php echo$row['lastname'] ?></td>
		<td><?php echo$row['complaint']; ?></td>
		<td><?php echo$row['date']; ?></td>
		<?php 
		if ($row['reply']=='pending') { 
			?>
		<td><a href="admin_sendreply.php?cid=<?php echo $row['complaint_id'] ?>">send reply</a></td>		
<?php
		}
		else{
		 ?>
		<td><?php echo$row['reply']; ?></td>
	<?php } ?>
		
	</tr>
	
<?php }



	 ?>



	</table>
</table>
</center>
 </div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->

<?php include 'footer.php' ?>