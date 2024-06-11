<?php include 'publicheader.php';

if (isset($_POST['registration'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$password' ,'user')";
	$id=insert($q);
	$q1="insert into registration values(null,'$id','$fname','$lname','$place','$number','$email')";
	insert($q1);
	alert('registration sucessfully');
	return redirect('repairshop_registration.php');

}




 ?>
  <div class="page-banner home-banner mb-5" style="height: 1000px"> 
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
             
           
         
          
  <center>     
 <h1> Registration</h1>
 <form method="post">
 	<table class="table" style="width: 500px;color:#ffff">
 		<tr>
 			<th>First Name</th>
 		     <td><input type="text" name="fname" class="form-control"></td>
 		</tr>
 		<tr>
 			<th>Last Name</th>
 			<td><input type="text" name="lname" class="form-control"></td>
 		</tr>
 		<tr>
 			<th>Place</th>
 			<td><input type="text" name="place" class="form-control"></td>
 		</tr>
 		<tr>
 			<th>Phone No:</th>
 			<td><input type="numbers" name="number" class="form-control"></td>
 		</tr>
 		<tr>
 			<th>Email</th>
 			<td><input type="email" name="email" class="form-control"></td>
 		</tr>
 		<tr>
			<th>User Name</th>
			<td><input type="text" name="uname" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
 		<tr>
 			<td align="center" colspan="2"><input type="submit" name="registration" value="submit" class="btn btn-success"></td>
 		</tr>
 	</table>
 </form>
 </center> 
  </div>
          </div>
         
    </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
<?php include 'footer.php' ?>