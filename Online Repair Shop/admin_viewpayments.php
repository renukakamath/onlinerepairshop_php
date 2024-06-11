<?php include 'adminheader.php' ?>
<div class="page-banner home-banner mb-5" style="height: 2000px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>view payments</h1>
<center>
<table class="table" style="width: 500px;color: white">
	<tr>
		<th>sino</th>
		
		<th>amount</th>
		<th>date</th>
	</tr>
	<?php
	$q="select * from payment";
	$res=select($q);
	$sino=1;
	 foreach ($res as $row) {?>
	 	<tr>
	 		<td><?php echo $sino++?></td>
	 		
	 		<td><?php echo $row['amount'] ?></td>
	 		<td><?php echo $row['date'] ?></td>
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
