<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/fe279e408d.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<section id="header">
      <a href="#"><img src="img/Logo.png" width="80" height="50" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a href="Menu Book.php">Menu Book</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li id="lg-bag">
            <a class="active" href="upload.php"><i class="fa-solid fa-store" style="color: #422d4d"></i></a>
          </li>
          <a href="#" id="close"><i class="fa fa-times"></i> </a>
        </ul>
      </div>
      <div id="mobile">
        <a href="upload.php"><i class="fa-solid fa-store" style="color: #422d4d"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

<section id="page-header">
      <h2>#ADMIN PANEL</h2>
      <p>Input Item Here!</p>
</section>

    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Name </label><br>
                <input type="text" name="name"><br>
                <label for="">Price </label><br>
                <input type="text" name="price" id=""> <br>
                <label for="">Image</label>
                <input type="file" name="image" id=""><br>
                <button name="upload" class="normal">Upload</button>
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