<?php include("index.php") ?>
<div class="col-6">		
<?php $tong="";$x1="";$x2="";$tb=""?>
<?php
	if(isset($_POST['txt_kq']))
	{
		if($_POST['txt_a']==0)
		{
			if($_POST['txt_b']==0)
			{
				$tong="Phương trình vô số nghiệm";
			}
			else
			{
				$tong=-$_POST['txt_c']/$_POST['txt_b'];
			}
		}
		else
		{
			$deta=pow($_POST['txt_b'],2)- 4*($_POST['txt_a']*$_POST['txt_c']);
			if($deta<0)
			{
				$tong="Phương trình vô nghiệm";
			}
			else if($deta==0)
			{
				$tong=-$_POST['txt_b']/(2*$_POST['txt_a']);
				$tb="phương trình có nghiệm kép x1=x2= "+$tong;
			}
			else
			{
				$x1=(-$_POST['txt_b']+sqrt($deta))/(2*$_POST['txt_a']);
				$x1=(-$_POST['txt_b']-sqrt($deta))/(2*$_POST['txt_a']);
				$tb="x1= "+$x1 +"< br /> x2="+$x2;
			}
		}
	}
?>
<form action="" method="post" class="">
	<p>Phương trình bặc 2 Ax^2+Bx+C=0</p>
	<div class="row" style="width:100%">
		<div class="col-3 text-right" style="padding-left: 40px" >
			<label style="font-size: 24px">Nhập A</label>
			<input type="number" name="txt_a" style="width: 60px"/>
		</div>
		<div class="col-3">
			<label style="font-size: 24px">Nhập B</label>
			<input type="number" name="txt_b" style="width: 60px"/>
		</div>
		<div class="col-3">
			<label style="font-size: 24px">Nhập C</label>
			<input type="number" name="txt_c" style="width: 60px"/>
		</div>
		<div class="col-12"><br/>
			<p>KẾT QUẢ <br/> <?php if($tb!="") echo $tb; else echo $tong?>  </p>
			<input type="submit" name="txt_kq" value="Tính" class="btn btn-primary" />
		</div>
	</div>
</form>
</div>
<?php include("footer.php") ?>