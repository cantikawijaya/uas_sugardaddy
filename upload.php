<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Name :</label>
                <input type="text" name="name"><br>
                <label for="">Price:</label>
                <input type="text" name="price" id=""> <br>
                <label for="">Image</label>
                <input type="file" name="image" id=""><br>
                <button name="upload">Upload</button>
            </form>
        </div>
    </center>

<!-- Fetching Data -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'config.php';
        $pic = mysqli_query($con,"SELECT * FROM `menu`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[Name]</td>
                <td>$row[Price]</td>
                <td><img src='$row[Image]' width = '200px' height = '100px'></td>
                <td> <a href='delete.php? Id= $row[id]' class = 'btn btn-danger'> Delete </a> </td>
                <td> <a href='update.php? Id= $row[id]' class = 'btn btn-danger'> Update </a> </td>
                <td></td>
            </tr>
            ";
        }
    ?>
  </tbody>
</table>
</body>
</html>