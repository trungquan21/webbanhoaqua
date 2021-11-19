<?php
require_once('../../DB/dbhelper.php');
//kiem tra xem post khong
if(!empty($_POST)) {
    $name = '';
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    //kiem tra xem name co rong khong
    if(!empty($name)) {
        //tao bien luu ngay tao
        $created_at = $updated_at = date('Y-m-d H:s:i');
        //luu vao database
        $sql = 'insert into category(name, created_at, updated_at)
        values ("'.$name.'","'.$created_at.'","'.$updated_at.'")';
        execute($sql);
        //quay ve trang index.php
        header('Location: index.php');
        die();
    }    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Danh Mục Sản Phẩm</title>
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
            <a class="nav-link " href="index.php">Quản lí danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản lí sản phẩm</a>
        </li>
        
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Danh Mục Sản Phẩm</h2>
			</div>
			<div class="panel-body">
                <form method="post">
                    <div class="form-group">
                    <label for="name">Tên danh mục:</label>
                    <input required="true" type="text" class="form-control" id="name" name="name">
                    </div>
                
                    <button class="btn btn-success">Save</button>
                </form>
                
			
			</div>
		</div>
	</div>
</body>
</html>