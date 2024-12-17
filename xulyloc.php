<?php
    include("connect.php");
    $sql = "SELECT * FROM `thuvien` WHERE 1=1";
    
    if (!empty($_POST['sapxep'])) {
        $sapXep = $_POST['sapxep'];
        if ($sapXep == "AZ") {
            $sql .= " ORDER BY NameBool ASC";
        } elseif ($sapXep == "ZA") {
            $sql .= " ORDER BY NameBool DESC";
        } elseif ($sapXep == "Up") {
            $sql .= " ORDER BY NamePerson ASC";
        } elseif ($sapXep == "Down") {
            $sql .= " ORDER BY NamePerson DESC";
        } elseif ($sapXep == "numberDown") {
            $sql .= " ORDER BY Year ASC";
        } elseif ($sapXep == "numberUp") {
            $sql .= " ORDER BY Year DESC";
        }
    }

    $sql_products = mysqli_query($conn, $sql);
    while ($result = mysqli_fetch_assoc($sql_products)) {
        echo '
            <tr>
                <th>' . $result['Id'] . '</th>
                <th>' . $result['NameBool'] . '</th>
                <th>' . $result['NamePerson'] . '</th>
                <th>' . $result['Year'] . '</th>
                <th>' . $result['Quantity'] . '</th>
                <th>
                    <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=chinhsua&id=' . $result['Id'] . '">Chỉnh sửa</a>
                    <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xulyxoa&id=' . $result['Id'] . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');">Xóa</a>
                </th>
            </tr>
        ';


    }
    
?>