<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD</title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/Main.js"></script>
    <link rel="stylesheet" href="assets/css/Main.css">
</head>
<body>
<h1>Cap nhap ban ghi #<?php echo $book['id'];?></h1>
<form action="index.php?controller=book&action=update&id=<?php echo $book['id'];?>" method="get">

    <br/> <label >Name Book</label>
    <input style="width: 50%" type="text" value="<?php echo $book['name'];?>" name="name" id="name"   placeholder="Book's Name">

    <br/><input onclick="return check()"  value="Update" type="submit" name="Update">
    <input onclick="cancel1()" value="cancel" type="button"  id="cancel">
    <p id="error"></p>
</form>
</body>
</html>