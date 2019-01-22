<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            text-align: center;
            border-bottom: 1px solid red;
        }
        h2{
            text-align: center;
            border-bottom: 1px solid #ccc;
            width: 300px;
            margin: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<table>
    <h2>Danh Sach Khach Hang</h2>
    <tr class="hang">
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Avatar</th>
    </tr>
<?php
    $customerlist = [
        "1"=>["ten"=>"Mai Van Hoan","ngaysinh"=>"1983-08-20","diachi"=>"Ha Noi","anh"=>"<image src='image/anh.jpg' width='70px' height='100px'/>"],
        "2"=>["ten"=>"Nguyen Van Lam","ngaysinh"=>"1983-08-20","diachi"=>"Ha Noi","anh"=>"<image src='image/anh.jpg' width='70px' height='100px'/>"],
        "3"=>["ten"=>"Nguyen Thai Hoa","ngaysinh"=>"1983-08-20","diachi"=>"Thanh Hoa","anh"=>"<image src='image/anh.jpg' width='70px' height='100px'>"],
        "4"=>["ten"=>"Tran Van Tuan","ngaysinh"=>"1997-11-14","diachi"=>"ThanhHoa","anh"=>"<image src='image/anh.jpg' width='70px' height='100px'/>"],
        "5"=>["ten"=>"Ho Van Dong","ngaysinh"=>"1998-12-13","diachi"=>"Bac Ninh","anh"=>"<image src='image/anh.jpg' width='70px' height=''100px/>"],
    ];
    foreach ($customerlist as $key =>$value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value["ngaysinh"]."</td>";
        echo "<td>".$value["diachi"]."</td>";
        echo "<td>".$value["anh"]."</td>";
        echo "</tr>";

    }
?>
</table>
</body>
</html>