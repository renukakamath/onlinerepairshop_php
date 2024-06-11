<?php include 'shopheader.php' ?>
  <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>view image</h1>
<center>
<table class="table" style="width: 500px;color: white">
<tr>
	<th>file</th>
</tr>

<?php 
$q="select * from image";
$res=select($q);

foreach ($res as $row) {?>
	<td><img src="<?php echo$row['file'] ?>" width="100" height="100"></td>
<?php  }


 ?>
</table>
</center>
</div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->




<?php include 'footer.php' ?>