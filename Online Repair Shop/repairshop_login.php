<?php include 'publicheader.php';

if (isset($_POST['login'])) {
	extract($_POST);


	echo$q="select * from login where username='$uname' and password='$password'";
	$res=select($q);

	if (sizeof($res>0)) {
		$_SESSION['logid']=$res[0]['login_id'];
		$logid=$_SESSION['logid'];
		if ($res[0]['type']=="admin") {
			return redirect('repairshop_admin.php');
		}elseif ($res[0]['type']=="shop") {
			return redirect('repairshop_shop.php');
		}elseif ($res[0]['type']=="user") {
			return redirect('repairshop_user.php');
		}
	}

}




 ?>



<div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
           
         
    


<center>
<h1>LOGIN</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>User Name</th>
			<td><input type="text" name="uname" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn  btn-success"></td>
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