<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $conn=mysqli_connect("localhost","root","","dienthoai"); 
    $id=$_GET['id'];
    $tv="DELETE FROM menu_ngang WHERE id = $id ";
    mysqli_query($conn,$tv);
?>