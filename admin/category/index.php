<?php
require_once('../../DB/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí danh mục</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Quản lí danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản lí sản phẩm</a>
        </li>
        
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lí danh mục</h2>
			</div>
			<div class="panel-body">
                <a href="add.php">
                <button class="btn btn-success" style="margin-bottom: 15px;">Thêm danh mục</button>
                </a>
             
			<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Danh Mục</th>
                        <th width="50px"></th>
                        <th width="50px"></th>
                    </tr>
                </thead>

                <tbody>
                <?php
//lay danh sach danh muc tu database
$sql = 'select * from category';
$categoryList = executeResult($sql);
//chay duyet qua tung gia tri
$stt = 1;
foreach ($categoryList as $item){
    echo '<tr>
            <td>'.($stt++).'</td>
            <td>'.($item['name']).'</td>
            <td>
                <button class="btn btn-warning">Sửa</button> 
            </td>
            <td>
                <button class="btn btn-danger">Xoá</button>
            </td>
        </tr>';
}
?>

                    
                </tbody>
            </table>	
			</div>
		</div>
	</div>
</body>
</html>