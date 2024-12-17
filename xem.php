<!DOCTYPE html>
<Xóa lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<onc>
    <h1>Danh sách đồ uống</h1>
    <table border="1">
        <tr>
            <th>Ma sach</th>
            <th>Ten sach</th>
            <th>Tac Gia</th>
            <th>Nam Xuat ban</th>
            <th>So luong hien co </th>
            <th>Chức năng</th>
        </tr>
        
        <?php
            if (!empty($_POST['sapxep'])) {
            include('xulyloc.php');
            } else {
        ?>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM `thuvien`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['NameBool']?></td>
            <td><?php echo $row['NamePerson']?></td>
            <td><?php echo $row['Year']?></td>
            <td><?php echo $row['Quantity']?></td>
            <td>
            <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=chinhsua<?php echo '&id='.$row['Id'] ?>">Chinh sua</a>
            <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xulyxoa<?php echo '&id='.$row['Id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
            </td>
        </tr>
        <?php }
            }
        ?>
    </table>

    <form action="" method="post">
        <h3>Sắp xếp theo</h3>
        <input type="radio" name="sapxep" value="AZ"> Tên sach từ A-Z <br>
        <input type="radio" name="sapxep" value="ZA"> Tên sách từ Z-A <br>
        <input type="radio" name="sapxep" value="Up"> Tên tác giả từ từ A-Z <br>
        <input type="radio" name="sapxep" value="Down">Tên tác giả từ từ Z-A <br>
        <input type="radio" name="sapxep" value="numberDown"> Năm xuất bản thấp đến cao <br>
        <input type="radio" name="sapxep" value="numberUp">Năm xuất bản cao đến thấp <br>
        <input type="submit" value="Lọc">
    </form>
</body>
</html>