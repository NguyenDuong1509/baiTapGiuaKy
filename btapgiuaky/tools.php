
<!DOCTYPE html>
<html>
    <head>
        <title>Nhập thông tin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
     <style>
.dev
{
    width:50%;
    margin: 100px auto;
    padding:20px;
    border: 1px solid black;
    background-color:whitesmoke;
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
body
{
    background-color: rgb(233, 231, 231);
}

     </style>
    </head>
    <body>
        <div class="dev">
            <h1>Nhập thông tin sinh viên</h1>
            <form action="user.php" method="post" class="was-validated">
                <div class="form-floating">
                    <input type="text" class="form-control " name="fullname" id="fullname" placeholder="Nhập họ tên" required>
                    <label for="fullname" >Họ và tên:</label>
                    <div class="invalid-feedback">
                      </div>
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Ngày sinh:</label>
                    <input class="form-control" type="date" name="dob" id="dob" required>
                    <div class="invalid-feedback">
                      </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Giới tính:</label>
                    <input type="radio" name="gender" value="1" class="form-check-input" required>
                    <label for="gender" class="form-check-label" >Nam</label>
                    <input type="radio" name="gender" value="0" class="form-check-input"  required>
                    <label for="gender" class="form-check-label">Nữ</label>
                    <div class="invalid-feedback">
                      </div>
                </div>
                <div class="form-floating">
                    <input type="text" id="hometown" name="hometown"class="form-control"placeholder="Nhập quê quán" required>
                    <label for="hometown" >Quê quán:</label>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-floating">
                    <select id="level" name="level" required aria-label="select example" class="form-select">
                    <option selected disabled value="">Mở menu lựa chọn</option>    
                    <option value="0">Tiến sĩ</option>
                        <option value="1">Thạc sĩ</option>
                        <option value="2">Kỹ sư</option>
                        <option value="3">Khác</option>
                    </select>
                    <label for="">Trình độ học vấn:</label>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-floating">
                    <input type="number" id="grp" name="group_id" class="form-control" placeholder="Nhập nhóm" required>
                    <label for="group_id" >Nhóm:</label>
                    <div class="invalid-feedback"></div>
                </div>
                <div style="text-align: right;">
                <input style="width: 100px;" class="btn btn-success" type="submit" name="input" value="Lưu">
                <button type="button" style="width: 100px;" class="btn btn-danger" onclick="window.history.back()">Đóng</button>
                </div>
            </form>
        </div>
    </body>
</html>