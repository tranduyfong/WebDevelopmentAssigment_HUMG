<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chỉnh sửa</h1>
    <form action="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xulychinhsua<?php echo '&id='.$_GET['id'] ?>" method="post">
        Tên sách:
        <input type="text" name="ten"><br><br>
        Tác giả:
        <input type="text" name="tac-gia"><br><br>
        Năm xuất bản:
        <input type="text" name="nam-xuat-ban"><br><br>
        Số lượng: <br>
        <input type="text" name="so-luong"><br><br>
        <input type="submit" value="Sửa">
    </form>
</body>
</html>