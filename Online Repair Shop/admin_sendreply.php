<?php include 'adminheader.php';


if (isset($_POST['update'])) 
{
	extract($_POST);
	$q="update complaint set reply='$r' where complaint_id='$cid'";
	update($q);
	alert('sucessfully');
	return redirect ('admin_viewcomplaint.php');

}





?>
<div class="page-banner home-banner mb-5" style="height: 2000px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1> sent reply</h1>
<center>
<form method="post">
	<?php 


	 ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>reply</th>
			<td><input type="text" name="r" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
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