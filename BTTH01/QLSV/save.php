<?php
require_once 'Student.php';
require_once 'StudentDAO.php';
require_once 'add.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    // $grade = $_POST['grade'];
    $handle = fopen('list.txt', 'r');
    $studentDAO = new StudentDAO();
    // Đọc các dòng dữ liệu từ file và lưu vào đối tượng StudentDAO
    while (($data = fgetcsv($handle)) !== false) {
      // Tạo đối tượng Student từ dữ liệu trong file
      $student = new Student($data[0], $data[1], $data[2], $data[3]);
      // Thêm đối tượng Student vào đối tượng StudentDAO
      $studentDAO->create($student);
    }
    // Đóng file sau khi đọc xong
    fclose($handle);
    if ($studentDAO->getById($id) == null) { //kiểm tra trùng id
        $student = new Student($id, $name, $age, $grade);
        $studentDAO = new StudentDAO();
        $studentDAO->create($student);
        $students = $studentDAO->getAll();
        $file = fopen('list.txt', 'a');
        foreach ($students as $student) {
            fwrite($file, $student->getId() . ',' . $student->getName() . ',' . $student->getAge() . ',' . $student->getGrade() . PHP_EOL);
        }
        fclose($file);
        // Chuyển hướng về trang danh sách sinh viên
        header('Location: index.php');
    } else {
        echo '<p style="color: red;">Student ID đã tồn tại!</p>';
      }
}

?>