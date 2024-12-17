<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            height: 50px;
            display: flex;
            align-items: center;
            background-color: grey;
        }
        header a {
            text-decoration: none;
            margin-right: 30px;
            font-size: 130%;
        }
    </style>
</head>
<body>
    <header>
        <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=xem">Xem </a>
        <a href="http://localhost/BaiDieuKienLuyenTap2/index.php?page_layout=them">Thêm </a>
    </header>

    <?php
    if(!empty($_GET['page_layout'])) {
        switch($_GET['page_layout']) {
            case 'xem':
                include('xem.php');
                break;
            case 'them':
                include('them.php');
                break; 
            case 'xulyxoa':
                include('xulyxoa.php');
                break;
            case 'chinhsua':
                include('chinhsua.php');
                break;
            case 'xulychinhsua':
                include('xulychinhsua.php');
                break;
        }   
    }
    ?>
</body>
</html>