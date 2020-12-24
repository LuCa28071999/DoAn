<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $conn=mysqli_connect("localhost","root","","dienthoai"); 
    $id=$_GET['id'];
    $tv="DELETE FROM hoa_don WHERE id = $id ";
    mysqli_query($conn,$tv);
    $link="?thamso=hoa_don&trang=".$_GET['trang'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Xóa hóa đơn</title>
    </head>
    <body>
        <script type="text/javascript" >
            window.location="<?php echo $link; ?>";
        </script>
    </body>
</html>
<?php
    exit();
?>