<?php
    $conn=mysqli_connect("localhost","root","","dienthoai");
    $tv="select * from footer limit 0,1";
    $tv_1=mysqli_query($conn,$tv);
    echo "<div class=footer>";
    $tv_2=mysqli_fetch_array($tv_1);
    echo $tv_2['html'];
    echo "</div>";
?>