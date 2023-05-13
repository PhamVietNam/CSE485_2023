<?php
require_once 'Student.php';
require_once 'StudentDAO.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Thêm sinh viên</h2>
        <form action="save.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Tuổi:</label>
                <input type="text" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="text" class="form-control" id="grade" name="grade" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
