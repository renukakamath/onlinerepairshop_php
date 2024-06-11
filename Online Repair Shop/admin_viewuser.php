<?php include 'adminheader.php' ?>
  <div class="page-banner home-banner mb-5" style="height: 5000px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
             
<h1>view user</h1>
<table class="table" style="width: 500px;color: white">
	<tr>
	<th>Sino:</th>
	<th>user name</th>
	<th>first name</th>
	<th>last name</th>
	<th>place</th>
	<th>phone</th>
	<th>email</th>
</tr>
	<?php 
$q="select * from registration inner join login using(login_id)";
$res=select($q);
$sino=1;

foreach ($res as $row) {?>
<tr>
<td><?php echo$sino++; ?></td>	
<td><?php echo$row['username'] ?></td>  
<td><?php echo$row['firstname'];?></td>
<td><?php echo$row['lastname']; ?></td>
<td><?php echo$row['place'];?></td>
<td><?php echo$row['phone'];?></td>
<td><?php echo$row['email'];?></td>
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