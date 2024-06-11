<?php include 'userheader.php';

if (isset($_POST['payment'])) {
	extract($_POST);

	echo$q="insert into payment values(null,'$rid','$amount',curdate())";
	insert($q);
	alert('insertion sucessfully');
	return redirect('user_payment.php');
 }


?>
<div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>payment</h1>
<center>
<form method="post">
<table class="table" style="width: 500px;color: white">
	<tr>
		<th>card number</th>
		<td><input type="text" name="card" class="form-control"></td>
	</tr>
	<tr>
		<th>cvv</th>
		<td><input type="text" name="ccvv" class="form-control"></td>
    </tr>
    <tr>
		<th>amount</th>
		<td><input type="text" name="amount" class="form-control"></td>

	</tr>
	<tr>
		<td><input type="submit" name="payment" value="submit" class="btn btn-success"></td>
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