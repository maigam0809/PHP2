<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số </title>
</head>
<body>
<!-- value="<?=htmlspecialchars($_POST['son'])?>" -->
    <form action="" method="post">

    số n <input type="text" name="son" style="margin-bottom: 10px;"  value="<?php echo $_POST['son'] ?? ''; ?>"> <br>
    <input type="submit" name="btn_nt" value="KT số nguyên tố" style="margin-right: 10px;"> 
    <input type="submit" name="btn_chan" value="KT số nguyên số chẵn">
    <input type="submit" name="btn_list_nt" value="liệt kê số nguyên tố">
    </form>
    
</body>
</html>