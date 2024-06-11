<?php include 'userheader.php';
extract($_POST);
$lid=$_SESSION['logid'];
if (isset($_POST['complaint'])) {
	extract($_POST);
echo$q="insert into complaint values(null,'$lid','$com','pending',curdate())";
insert($q);
alert('insert sucessfully');
return redirect('user_sentcomplaint.php');
}




 ?>
  <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <div class="img-caption">
<h1>sent complaint</h1>
<center>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>complaint</th>
			<td><input type="text" name="com" class="form-control" ></td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="complaint" value="submit" class="btn btn-success"></td>
		</tr>
    </table>
</form>
</center>
 </div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
<center>
<h1>view complaint </h1>

<table class="table" style="width: 500px">
	<tr>
		<th>sino:</th>
		<th>user</th>
		<th>complaint</th>
		<th>reply</th>
		<th>date</th>
		
	</tr>
	<?php 
	$q="select * from complaint inner join registration using(user_id)";
	$res=select($q);
    $sino=1;
    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo$sino++; ?></td>
    		<td><?php echo$row['firstname'];?></td>
    		<td><?php echo$row['complaint']; ?></td>
    		<td><?php echo$row['reply'];?></td>
    		<td><?php echo$row['date']; ?></td>
         
    		
    	</tr>
    	
    <?php }







	 ?>
</table>
</center>

<?php include 'footer.php' ?>