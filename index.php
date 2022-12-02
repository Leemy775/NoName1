<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>@ViewBag.Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
<?php
    require_once ('Classes/PHPExcel.php');

    if (isset($_POST["import"])) {
        $targetPath = $_FILES['file']['tmp_name'];
       
       $objRededer = PHPExcel_IOFactory:: createReaderForFile($targetPath);
       $objRededer-> setLoadSheetsOnly("Nhap_Xuat_Ton");

       $objExecl = $objRededer->load($targetPath);
       $sheetData = $objExecl-> getActiveSheet()->toArray('null',true,true,true);

       $hightRow = $objExecl-> setActiveSheetIndex()->getHighestRow();
      
}
?>
 <?php if (isset($sheetData)) {?>
    <form action="Mau_in.php" method="post" name="in" id="in" enctype="multipart/form-data">
    <input type="hidden " name="hightRow" value="<?php echo $hightRow; ?>" style="display:none"/>
        <table class="table table-bordered">
            <?php   for ($i=23; $i <  $hightRow; $i++) { ?>
            <tr>
            <td>
            <?php if ($i > 23) { ?>
             <input type="text" name="text_<?php echo $i?>" value="1"/>
             <?php } ?>
            </td>           
            <td>
                <?php if ($i > 23) {?>
                    <input type="checkbox" name="check_<?php echo $i?>" value="1"/>
                <?php }?>
            </td>
            <td><?php echo $sheetData[$i]["A"]?></td>
            <td><?php echo $sheetData[$i]["B"]?> 
                <input type="hidden " name="name_sp<?php echo $i; ?>" value="<?php echo $sheetData[$i]["B"]; ?>" style="display:none"/>
            </td>
            <td><?php echo $sheetData[$i]["C"]?>
                <input type="hidden " name="id_sp<?php echo $i; ?>" value="<?php echo $sheetData[$i]["C"]; ?>" style="display:none"/>
            </td>
            <td><?php echo $sheetData[$i]["D"]?></td>
            <td><?php echo $sheetData[$i]["E"]?></td>
            <td><?php echo $sheetData[$i]["F"]?></td>
            <td><?php echo $sheetData[$i]["G"]?></td>
            <td><?php echo $sheetData[$i]["H"]?></td>
            <td><?php echo $sheetData[$i]["I"]?></td>
            <td><?php echo $sheetData[$i]["J"]?></td>
            <td><?php echo $sheetData[$i]["K"]?></td>              
            <tr>    
            <?php    }?>
        </table>
        <button type="submit" id="submit" name="in" class="btn-submit">IN</button>
    </form>
    <?php  }?>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="~/Scripts/js_file.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
</body>
</html>
