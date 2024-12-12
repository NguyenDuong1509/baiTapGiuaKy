<?php 
require 'connect.php';
$sql= "SELECT * FROM table_students";
if (isset($_POST['search'])) {
    $name = $con->real_escape_string($_POST['nd']); 
    $sql = "SELECT * FROM table_students WHERE fullname LIKE '%$name%' OR hometown LIKE '%$name%'";
}


$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hiển thị danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    
*
{
    font-family: Arial, Helvetica, sans-serif;
}
.button_delete
{
    background-color: red;
    color : white;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    font-size: large;
    padding: 5px;
}
.button_update
{
    background-color: #1b98e0;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    padding: 5px;
    font-size:large;    
}
.button_delete:hover
{
    color:white;
    background-color: brown;
    cursor: pointer;
}
.button_update:hover
{
    color: white;
    cursor: pointer;
    background-color: #006494;
}

table
{
    color:red;
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 10px;
    overflow: hidden;
    font-size:medium;
    text-align: center;
    
}
table th
{
    background-color:#1b98e0;
    color:white;
    height: 40px;
    text-transform: none !important;
}

table td
{
    padding: 12px;
    border-bottom: 1px solid #050505;

}
tr:nth-child(even) {background-color: #f2f2f2;}
.insert
{
    color: white;
    background-color: #0ecc0e;
    border: 1px;
    border-radius: 5px;
    width: 150px;
    height: 37px;
    padding-top: 5px;
    font-size: large;
    float: right;
    text-align: center;
}
.insert:hover{
    background-color: darkgreen;
}
.search
{
    text-align: center;
    text-decoration: none;
    background-color: #dc3636;
    color: white;
    border-radius: 5px;
    width: 150px;
    font-size: larger;
    height: 37px;
    border: none;
}
.search:hover
{
    background-color: blueviolet;
    cursor: pointer;
}
.border
{
    border: 1px solid rgba(0, 0, 0, 0.425);
    height: 31px;
    border-radius: 5px;
    margin: 1px;
    width: 988px;
    font-size: large;
}
.them
{
    text-decoration: none;
    color: white;
    float:center;

}
.dd
{
    display: flex;
}
h1{
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
}
</style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <div class="container">
    <div class="insert">
        <a class="them" href="tools.php"><i class="fa-solid fa-user-plus"></i>Thêm sinh viên</a>
        </div>
        <div class="dd">
        <form method="post">
            <input class="border" type = "text" name="nd" placeholder="Enter name or hometown to search...">
            <button class="search" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
        </form>
    </div>
    <table class="table">
        <tr style="background-color:deepskyblue;">
            <th scope="col"><i class="fa-solid fa-list-ul"></i> Name</th>
            <th scope="col"><i class="fa-solid fa-calendar-days"></i> Date</th>
            <th scope="col"><i class="fa-solid fa-venus-mars"></i> Gender</th>
            <th scope="col"><i class="fa-solid fa-location-dot"></i> Hometown</th>
            <th scope="col"><i class="fa-solid fa-user-doctor"></i> Level</th>
            <th scope="col"><i class="fa-solid fa-user-group"></i> Group_id</th>
            <th scope="col"><i class="fa-solid fa-gear"></i> Operation</th>
    
        </tr>
  <tbody>

  <?php 
    while($row=mysqli_fetch_assoc($result)) {
        $levels = [
            0 => "Tiến sĩ",
            1 => "Thạc sỹ",
            2 => "Kỹ sư",
        ];
        $level = $levels[$row['level']] ?? "Khác";
      $groups = [
        1 => "Nhóm 1",
        2 => "Nhóm 2",
        3 => "Nhóm 3",
        4 => "Nhóm 4",
        5 => "Nhóm 5",
        6 => "Nhóm 6",
        7 => "Nhóm 7",
        8 => "Nhóm 8",
        9 => "Nhóm 9",
    ];
    
    $group_id = $groups[$row['group_id']] ?? "Không Có Nhóm";
    
      if($row['gender']==1)
  {
      $gender = "Nam";
  }
  else
  {
      $gender = "Nữ";
  }
  $date_from_db = $row['dob'];
  $formatted_date = date('d/m/Y', strtotime($date_from_db));
      echo            "<tr>
      <td>".$row['fullname']."</td>
      <td>".$formatted_date."</td>
      <td>".$gender."</td>
      <td>".$row['hometown']."</td>
      <td>".$level."</td>
      <td>".$group_id."</td>
       <td style='width: 120px;'>
                    <a class='button_update' href='update.php?id=".$row['id']."'><i class='fa-solid fa-pen'></i> | Sửa</a>
                    <a class='button_delete' href='delete.php?id=".$row['id']."'><i class='fa-solid fa-trash'></i> | Xóa</a>
                </td>
    </tr>";
    }
  ?>
  </tbody>
</table>
    </div>
</body>
</html>