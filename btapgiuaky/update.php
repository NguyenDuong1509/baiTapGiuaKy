<?php
require 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `table_students` WHERE id = $id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
if($_SERVER['REQUEST_METHOD']==='POST')
{  
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $level = $_POST['level'];
    $group_id = $_POST['group_id'];
$update = "UPDATE table_students SET fullname = '$fullname' , dob='$dob' , gender='$gender',hometown = '$hometown' , level = '$level' , group_id ='$group_id' WHERE id = {$id}";
if($con ->query($update)===TRUE)
{
    header('Location:display.php');
}
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <style>
.fix
{
    width:50%;
    margin: 100px auto;
    padding:20px;
    border: 1px solid black;
    background-color: white;
    border-radius: 20px;
}
h1
{
    margin-bottom: 20px;
    text-align: center;
}
*
{
    margin-bottom: 20px;
}
.button {
    background-color:deepskyblue;
}

        </style>
    </head>
    <body style="background-color: rgb(233, 231, 231);">
    
        <div class="fix">
            <form method="post" class="was-validated">
                <div>
                <h1 style="text-align: center;">Chỉnh sửa thông tin</h1>
                <label for="fullname" class="form-label">Họ và tên:</label>
                <input class="form-control" type="text" name="fullname" id="fullname" value="<?=$row['fullname']?>" required>
                <div class="invalid-feedback">
    </div>
                </div>
                <div>
                    <label class="form-label" for="dob">Ngày sinh:</label>
                    <input  class="form-control" type="date" name="dob" id="dob"value="<?=$row['dob']?>" required>
                    <div class="invalid-feedback">
    </div>
                </div>
                <div>
                    <label  for="" >Giới tính:</label>
                    <input class="form-check-input" type="radio" name="gender" value="1" <?= $row['gender']==1 ? 'checked': ''?> required>
                    <label for="gender">Nam</label>
                    <input class="form-check-input" type="radio" name="gender" value="0" <?= $row['gender']==0 ? 'checked': ''?> required>
                    <label for="gender">Nữ</label>
                    <div class="invalid-feedback">
    </div>
                </div>
                <div>
                    <label for="hometown" class="form-label">Quê quán:</label>
                    <input class="form-control" type="text" id="hometown" name="hometown" value="<?= $row['hometown']?>"required>
                    <div class="invalid-feedback">
    </div>
                </div>
                <div>
                    <label for="" class="form-label">Trình độ học vấn:</label>
                    <select class="form-select" id="level" name="level">
                        <option value="0" <?= $row['level']==0 ? 'selected':''?>>Tiến sĩ</option>
                        <option value="1" <?= $row['level']==1 ? 'selected':''?>>Thạc sĩ</option>
                        <option value="2" <?= $row['level']==2 ? 'selected':''?>>Kỹ sư</option>
                        <option value="3" <?= $row['level']==3 ? 'selected':''?>>Khác</option>
                    </select>
                    <div class="invalid-feedback">
    </div>
                </div>
                <div>
                    <label for="group" class="form-label">Nhóm:</label>
                    <input class="form-control" type="number" id="group_id" name="group_id" value="<?= $row['group_id']?>" required>
                </div>
                <div class="invalid-feedback">
    </div>
                <div style="text-align: right;">
                <input style="width: 100px;" class="btn btn-primary" type="submit" value="Lưu">
                <button type="button" style="width: 100px;" class="btn btn-danger" onclick="window.history.back()">Đóng</button>
                </div>
            </form>
        </div>
    </body>
</html>