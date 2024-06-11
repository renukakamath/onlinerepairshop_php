<?php include 'shopheader.php';
	extract($_GET);

if (isset($_POST['amount'])) {
	extract($_POST);

	echo$q="update request set amount='$amo' where request_id='$rid'";
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
	<table class="table" style="width: 500px">
	<tr>
		<th>amount</th>
		<td><input type="text" name="amo" class="form-control"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" name="amount" value="submit" class="btn btn-success"></td>
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