<?php include("index.php") ?>
<div class="col-6">		
<?php $tong="" ?>
<?php
	if(isset($_POST['txt_tong']))
	{
		$tong=$_POST['txt_a']+$_POST['txt_b'];
	}
	if(isset($_POST['txt_tru']))
	{
		$tong=$_POST['txt_a']-$_POST['txt_b'];
	}
	if(isset($_POST['txt_nhan']))
	{
		$tong=$_POST['txt_a']*$_POST['txt_b'];
	}
	if(isset($_POST['txt_chia']))
	{
		$tong=$_POST['txt_a']/$_POST['txt_b'];
	}
?>
<form action="" method="post" class="">
	<div class="row" style="width:100%">
		<div class="col-6" >
			A<input type="number" name="txt_a" />
		</div>
		<div class="col-6">
			B<input type="number" name="txt_b" />
		</div>
		<div class="col-12" style="width:250%"><br/>
			<p>KẾT QUẢ <?php echo $tong?>  </p>
			<input type="submit" name="txt_tong" value="Cộng" class="btn btn-primary" />
			<input type="submit" name="txt_tru" value="Trừ" class="btn btn-primary"/>
			<input type="submit" name="txt_nhan" value="Nhân" class="btn btn-primary"/>
			<input type="submit" name="txt_chia" value="Chia" class="btn btn-primary"/>
		</div>
	</div>
</form>
</div>
<?php include("footer.php") ?>