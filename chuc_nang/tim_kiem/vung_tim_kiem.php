Tìm kiếm <br>
<form class="tim_kiem" action="index.php" method="GET"  >
 <?php
  // for($i=1;$i<=$so_trang;$i++)
  //  {
   //     $link=$_GET['tu_khoa'];
        
   // }
?>
    <input type="hidden" name="thamso" value="tim_kiem" >
    <input type="text" name="tu_khoa" value= "<?php //echo "$link";?>" style="margin-top:10px;margin-bottom:10px;" placeholder="Nhập tên sách ở đây nhé !!" >
    <input id="tim" type="submit" value="Tìm" >
    <input type="submit" value="giatang" name="giatang" >
    <input  type="submit" value="giagiam" name="giagiam">
</form>