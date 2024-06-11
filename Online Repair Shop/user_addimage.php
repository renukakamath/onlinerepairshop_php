<?php include 'userheader.php';
extract($_GET);

if (isset($_POST['add'])) {
	extract($_POST);

	$dir = "image/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
	echo $q="insert into image values(null,'$rid','$target')";
	insert($q);
	alert('insertsucessfully');
	return redirect('user_addimage.php');
	}
		else
		{
			echo "file uploading error occured";
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
<form method="post" enctype="multipart/form-data">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>image</th>
			<td><input type="file" name="imgg" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="add" value="submit" class="btn btn-success"></td>
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
<h1>view image</h1>
<table class="table" style="width: 500px">
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