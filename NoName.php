<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<h1>HELLO WORD (NHÓM NONAME)</h1>
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
<form action="" method="post">
A:<input type="number" name="txt_a" />
B:<input type="number" name="txt_b" /><br />
    <br />
    <p>KẾT QUẢ: <?php echo $tong?>  </p>
    <input type="submit" name="txt_tong" value="tong" />
    <input type="submit" name="txt_tru" value="tru" />
    <input type="submit" name="txt_nhan" value="nhan" />
    <input type="submit" name="txt_chia" value="chia" />
</form>