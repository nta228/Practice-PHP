<?php
require_once("config.php");
require_once("dbhelper.php");
require_once("process-form.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nguyen Huu Tuan Anh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            User List
        </div>
        <div class="form-group">
            <input type="text" class = "form-control" placeholder="Management Student's Detail information">
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>No</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Address</th>
		    <th>telephone</th>
                    <th width="60px"></th>
                </tr>
                <?php
                $sql = 'select * from student';
                $result = execute_result($sql);
                $no = 1;
                foreach ($result as  $row) {
                    echo '<tr>
					<td>'.($no++).'</td>
					<td>'.$row['fullname'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['telephone'].'</td>
					<td><a href="?id='.$row['id'].'"><button class="btn btn-danger">Delete</button></a></td>
					</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Student's Detail Information
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-hover table-bordered">
            <form method="POST">
                <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="address" name="address" class="form-control">
                </div class="form-group">
                <label>Telephone</label>
                <input type="telephone" name="telephone" class="form-control">
    </div>
                <button class="btn btn-success">Save</button>
            </form>
        </table>
    </div>
</div>
</body>
</html>
