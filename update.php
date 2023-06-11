<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    include 'config.php';
    $ID = $_GET['Id'];
    $Record = mysqli_query($con,"SELECT * FROM `menu` WHERE Id = $ID");
    $data = mysqli_fetch_array($Record);

?>                                                  
    <center>
        <div class="main">
            <form action="update1.php" method="POST" enctype="multipart/form-data">
                <label for="">Name :</label>
                <input type="text" value="<?php echo $data['Name'] ?>" name="name"><br>
                <label for="">Price:</label>
                <input type="text" value="<?php echo $data['Price'] ?>" name="price" id=""> <br>
                <label for="">Image</label>
                <td><input type="file" name="image" id=""> <img src="<?php echo $data['Image'] ?>" width = '200px' height = '100px' alt=""></td><br>
                <input type="hidden" name="Id" value="<?php echo $data['id'] ?>">
                <button name="update">Update</button>
            </form>
        </div>
    </center>

    <!-- Update code -->

</body>
</html>