<?php
include 'connect2.php';
//Truy vấn danh sách sản phẩm
$query = "SELECT * FROM product ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sản phẩm</title>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <a href="addpro.php">Thêm sản phẩm mới</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
        </tr>
        <?php 
        //Hiển thị danh sách sản phẩm từ cơ sở dữ liệu
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$row ['id'] . "</td>";
            echo "<td><img src = ".$row['image_url']."></td>";
            echo "<td>" .$row['namepro'] . "</td>";
        }
        ?>
    </table>
</body>
</html>
<?php
//Đóng kết nối
mysqli_close($conn);
?>