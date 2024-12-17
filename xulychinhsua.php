<?php
    include("connect.php");
    $ten = $_POST['ten'];
    $tacgia = $_POST['tac-gia'];
    $namxuatban = $_POST['nam-xuat-ban'];
    $soluong = $_POST['so-luong'];
    $update = $_GET['id'];

    $sql = "UPDATE `thuvien` SET `NameBool`='$ten',`NamePerson`='$tacgia',`Year`='$namxuatban',`Quantity`='$soluong' WHERE `Id` = $update";
    mysqli_query($conn, $sql);  

    header("Location: http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xem");
?>