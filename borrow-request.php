<?php
    require 'connect.php';
    if(isset($_POST['confirm'])) {
        $ISBN = $_POST['ISBN'];
        $quantity = $_POST['quantity'];
        $num = (int)$quantity;
        $total = $num - 1;
        $sql = "UPDATE books SET Quantity = '$total' WHERE ISBN = '$ISBN'";
        $query = mysqli_query($con, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5bf9be4e76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/request.css">
    <link rel="shortcut icon" href="img/svcc-logo.png" type="image/x-icon">
    <title>Borrow Request | SVCC Library</title>
</head>
<body>
    <div class="header">
        <div class="bg"></div>
        <img src="img/svcc-logo.png" alt="svcc logo">
        <h5 class="svcc-text">ST. VINCENT COLLEGE OF CABUYAO</h5>
        <div class="diamond"></div>
        <div class="lms"><p>Library <br> Management</p></div>
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="home1.php"><i class="fa-solid fa-house fa-xs"></i>Home</a></li>
            <li><a href="search-book.php"><i class="fa-solid fa-magnifying-glass fa-xs"></i>Search Book</a></li>
            <li class="active"><a href="borrow-book.php"><i class="fa-solid fa-book-open-reader fa-xs"></i>Borrow Book</a></li>
            <li><a href="borrow-request.php"><i class="fa-solid fa-bookmark fa-xs"></i>Borrow History</a></li>
            <li><a href="return-book.php"><i class="fa-solid fa-arrow-right-arrow-left fa-xs"></i>Return Book</a></li>
            <li><a href="profile.php"><i class="fa-solid fa-address-book fa-xs"></i>Profile</a></li>
        </ul>
    </div>

    <div class="content">
        HELLO
    </div>
    
</body>
</html>