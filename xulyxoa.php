<?php
    include("connect.php");
    $delete = $_GET['id'];
    $sql = "DELETE FROM `thuvien` WHERE `Id` = '$delete'";
    mysqli_query($conn, $sql);  

    header("Location: http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xem");
?>