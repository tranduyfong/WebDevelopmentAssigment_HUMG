<?php
    include("connect.php");
    $ten = $_POST['ten'];
    $tacgia = $_POST['tac-gia'];
    $namxuatban = $_POST['nam-xuat-ban'];
    $soluong = $_POST['so-luong'];

    $sql = "INSERT INTO `thuvien`( `NameBool`, `NamePerson`, `Year`, `Quantity`) VALUES ('$ten','$tacgia','$namxuatban','$soluong')";
    mysqli_query($conn, $sql);  

    header("Location: http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xem");
?>