<?php include 'userheader.php' ?>
 <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
               <center>
<h1>my service</h1>
<table class="table" style="width: 500px;color: white">
   <tr>
	<th>sino:</th>
	<th>service</th>
	<th>shop</th>
	</tr>
	<?php 
   $q="select * from myservice inner join service using (service_id) inner join shop using (shop_id)";
   $res=select($q);
   $sino=1;
   foreach ($res as $row) {?>
   	<tr>
   	<td><?php echo$sino++ ?></td>
   	<td><?php echo $row['service']; ?></td>
   	<td><?php echo $row['first_name']; ?></td>
   
   	<td><a href="user_sentrequest.php?rid=<?php echo $row['myservice_id']; ?>">sent request</a></td>
   	
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