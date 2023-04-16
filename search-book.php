<?php
            require 'connect.php';
            if(isset($_POST['button'])){
                $searchBook = $_POST['search'];
                $sql = "SELECT * FROM books WHERE ISBN LIKE '%$searchBook%'";
                $query = mysqli_query($con, $sql);
            } else if (isset($_POST['see'])) {
                $sql = "SELECT * FROM books ORDER BY Title ASC";
                $query = mysqli_query($con, $sql);
            } else {
                $sql = "SELECT * FROM books ORDER BY Title ASC";
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
    <link rel="stylesheet" href="css/search-book.css">
    <link rel="shortcut icon" href="img/svcc-logo.png" type="image/x-icon">
    <title>Search Book | SVCC Library</title>
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
            <li class="active"><a href="search-book.php"><i class="fa-solid fa-magnifying-glass fa-xs"></i>Search Book</a></li>
            <li><a href="borrow-book.php"><i class="fa-solid fa-book-open-reader fa-xs"></i>Borrow Book</a></li>
            <li><a href="borrow-request.php"><i class="fa-solid fa-bookmark fa-xs"></i>Borrow Request</a></li>
            <li><a href="return-book.php"><i class="fa-solid fa-arrow-right-arrow-left fa-xs"></i>Return Book</a></li>
            <li><a href="profile.php"><i class="fa-solid fa-address-book fa-xs"></i>Profile</a></li>
        </ul>
    </div>

    <div class="content">
        <h4>Search Book</h4>

        <div class="search">

            <form action="" method="POST">
                <input type="text" placeholder="Search book using ISBN" name="search">
                <button class="button btn" name="button">SEARCH</button>
                <button class="button see" name="see">SEE ALL</button>
            </form>
        </div>

        <div class="search-result">
            <table cellspacing="0">
                <tr>
                    <th>ISBN</th>
                    <th>BOOK TITLE</th>
                    <th class="authorName">AUTHOR NAME</th>
                    <th>SERIES</th>
                    <th>STATUS</th>
                </tr>

                <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($query)){
                    ?>
                        <td> <?php echo $row['ISBN'] ?></td>
                        <td> <?php echo $row['Title'] ?></td>
                        <td> <?php echo $row['Author'] ?></td>
                        <td> <?php echo $row['Series'] ?></td>
                        <td> <?php if($row['Quantity'] >= 1) {
                            echo "AVAILABLE";
                        } else {
                            echo "NOT AVAILABLE";
                        } ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>