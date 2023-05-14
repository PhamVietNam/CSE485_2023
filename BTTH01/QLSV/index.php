<?php
require_once 'read.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Danh sách sinh viên</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Tuổi</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
            foreach ($students as $student) { ?>
                <tr>
                    <td><?= $student->getId()?></td>
                    <td><?= $student->getName() ?></td>
                    <td><?= $student->getAge() ?></td>
                    <td>
                        <button class="btn btn-primary" >Sửa</button>
                        <button class="btn btn-danger" >Xóa</button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="add.php" class="btn btn-success" >Thêm sinh viên</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
