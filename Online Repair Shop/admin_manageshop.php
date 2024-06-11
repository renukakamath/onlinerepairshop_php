<?php include 'adminheader.php';

if (isset($_POST['shop'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$password','shop')";
	$id=insert($q);
    $q="insert into shop values(null,'$id','$fname','$lname','$place','$number','$email')";
    insert($q);
    alert('sucessfully shop register');
    return redirect('admin_manageshop.php');
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from shop where shop_id='$did'";
	delete($q);
	alert('deleteion sucessfully');
	return redirect('admin_manageshop.php');

}

if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from shop where shop_id='$uid'";
	$res=select($q);	
}
if (isset($_POST['update'])) {
	extract($_POST);
	echo$q="update shop set first_name='$fname',last_name='$lname',place='$place',phone='$number',email='$email' where shop_id='$uid'";
	update($q);
	alert('update sucessfully');
	return redirect('admin_manageshop.php');
}





 ?>
  <div class="page-banner home-banner mb-5" style="height: 850px">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
             
<center>         
<h1>manage shop</h1>
<form  method="post">
	<?php if (isset($_GET['uid'])) {  ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" value="<?php echo$res[0]['first_name'];?>" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" value="<?php echo$res[0]['last_name']; ?>" class="form-control"></td>
		</tr>
		<tr>
		<th>place</th>
		<td><input type="text" name="place" value="<?php echo$res[0]['place'];?>" class="form-control"></td>
        </tr>
        <tr>
        	<th>phone</th>
        	<td><input type="numbers" name="number" value="<?php echo$res[0]['phone']; ?>" class="form-control"></td>
        </tr>
        <tr>
        	<th>email</th>
        	<td><input type="email" name="email" value="<?php echo$res[0]['email']; ?>" class="form-control"></td>
        </tr>
       
		 <tr>
        	<td align="center" colspan="5" ><input type="submit" name="update" value="submit" class="btn btn-success"></td>
        </tr>
	</table>
<?php }else{ ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" class="form-control"></td>
		</tr>
		<tr>
		<th>place</th>
		<td><input type="text" name="place" class="form-control"></td>
        </tr>
        <tr>
        	<th>phone</th>
        	<td><input type="numbers" name="number" class="form-control"></td>
        </tr>
        <tr>
        	<th>email</th>
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
        	<td align="center" colspan="5" ><input type="submit" name="shop" value="submit" class="btn btn-success"></td>
        </tr>
	</table>
	</center>
<?php } ?>
</form>

 </div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
<center>
<h1> view manage shop</h1>
<table class="table" style="width: 600px">
<tr>
	<th>sino:</th>
	<th>first name</th>
	<th>last name</th>
	<th>place</th>
	<th>phone</th>
	<th>email</th>
	<?php 
$q="select * from shop";
$res=select($q);
$sino=1;

foreach ($res as $row) {?>
	
	<tr>
		<td><?php echo$sino++ ?></td>
		<td><?php echo$row['first_name']; ?></td>
		<td><?php echo$row['last_name']; ?></td>
		<td><?php echo$row['place']; ?></td>
		<td><?php echo$row['phone'];?></td>
		<td><?php echo$row['email']; ?></td>
		<td><a href="?did=<?php echo$row['shop_id'];?>">delete</a></td>
		<td><a href="?uid=<?php echo$row['shop_id']; ?>">update</a></td>

	</tr>
<?php  }



	 ?>

</tr>
</table>
</center>  
 </div>
          </div>
           </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->

<?php include 'footer.php' ?>