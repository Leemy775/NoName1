<?php include("index.php");session_start(); ?>
<div class="col-6">		
<?php $tong="" ;
	$dayso=[];
	$dayso1=[];
	$dayso2=[];
	$b=""?>
<?php
	if(isset($_POST['txt_tao']))
	{
		for ($i=0; $i <$_POST['txt_b'] ; $i++) { 
			$dayso[$i]=mt_rand(0,100);
		}
		$_SESSION["mang"]=$dayso;
	}
	if(isset($_POST['txt_giam']))
	{
		if(isset($_SESSION["mang"]))
		{
			$dayso1=$_SESSION["mang"];
		}
		for ($i=0; $i <count($dayso1) ; $i++) { 
			for ($j=0; $j <count($dayso1) ; $j++)
				if($dayso1[$i]>$dayso1[$j])
				{
					$tamp=$dayso1[$i];
					$dayso1[$i]=$dayso1[$j];
					$dayso1[$j]=$tamp;
				}
		}
		$_SESSION["manggiam"]=$dayso1;
	}
	if(isset($_POST['txt_tang']))
	{
		if(isset($_SESSION["mang"]))
		{
			$dayso2=$_SESSION["mang"];
		}
		for ($i=0; $i <count($dayso2) ; $i++) { 
			for ($j=0; $j <count($dayso2) ; $j++)
				if($dayso2[$i]<$dayso2[$j])
				{
					$tamp=$dayso2[$i];
					$dayso2[$i]=$dayso2[$j];
					$dayso2[$j]=$tamp;
				}
		}
		$_SESSION["mangtang"]=$dayso2;
	}
	if(isset($_POST['txt_clean']))
	{
		unset($_SESSION["mangtang"]);
		unset($_SESSION["manggiam"]);
		unset($_SESSION["mang"]);
	}
?>
<form action="" method="post" class="">
	<div class="row" style="width:100%">
		Nhập số lượng phần tử mảng
		<input type="number" name="txt_b" min="1" value="<?php echo $_POST['txt_b']?>"/>
		<input type="submit" name="txt_tao" value="Tạo mảng" class="btn btn-primary" />
		<?php
			if(isset($_SESSION["mang"]))
			{
				$dayso=$_SESSION["mang"];
		?>
			<p>Nội dung mảng: 
		<?php
				for ($i=0; $i < count($dayso); $i++) { 
					echo $dayso[$i] . " ";
				}
			}
		?>
		</p>
		<?php
			if(isset($_SESSION["manggiam"]))
			{
				$dayso1=$_SESSION["manggiam"];
		?>
			<p>Nội dung mảng sắp xếp Giảm: 
		<?php
				for ($i=0; $i < count($dayso1); $i++) { 
					echo $dayso1[$i] ." ";
				}
			}
		?>
		</p>
		<?php
		
			if(isset($_SESSION["mangtang"]))
			{
				$dayso2=$_SESSION["mangtang"];
		?>
			<p>Nội dung mảng sắp xếp tăng:
		<?php
				for ($i=0; $i < count($dayso2); $i++) { 
					echo $dayso2[$i] . " ";
				}
			}
		?>
	</p>
		<div class="col-12" style="width:250%"><br/>
			<p>KẾT QUẢ <?php echo $tong?>  </p>
			<input type="submit" name="txt_giam" value="Sắp Xếp Giảm" class="btn btn-primary" />
			<input type="submit" name="txt_tang" value="Sắp Xếp Tăng" class="btn btn-primary" />
			<input type="submit" name="txt_clean" value="Clean mảng" class="btn btn-primary" />
		</div>
	</div>
	</form>
</div>
<?php include("footer.php") ?>