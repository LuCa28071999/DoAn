
<?php
    $conn=mysqli_connect("localhost","root","","dienthoai");
    $tv="select html from quang_cao where vi_tri='trai' ";
    $tv_1=mysqli_query($conn,$tv);
    
    echo "<h3 style='text-align: center;'>Quảng Cáo 1 Tí</h3>";
    $tv_2=mysqli_fetch_array($tv_1);
    echo $tv_2['html'];
    
?>