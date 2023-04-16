<?php
    require 'connect.php';

    if(isset($_POST['submit'])) {
        $ISBN = $_POST['ISBN'];
        $sql = "SELECT * FROM books WHERE ISBN = '$ISBN'";
        $query = mysqli_query($con, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/book-info.css">
    <script src="https://kit.fontawesome.com/5bf9be4e76.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/svcc-logo.png" type="image/x-icon">
    <title>Book Info | SVCC Library</title>
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
            <li><a href="borrow-book.php"><i class="fa-solid fa-book-open-reader fa-xs"></i>Borrow Book</a></li>
            <li class="active"><a href="borrow-request.php"><i class="fa-solid fa-bookmark fa-xs"></i>Borrow History</a></li>
            <li><a href="return-book.php"><i class="fa-solid fa-arrow-right-arrow-left fa-xs"></i>Return Book</a></li>
            <li><a href="profile.php"><i class="fa-solid fa-address-book fa-xs"></i>Profile</a></li>
        </ul>
    </div>
    <div class="search-result">
            <h2>Book Information</h2>
            <table cellspacing="0" class="result">
                <tr>
                    <th>COVER</th>
                    <th>ISBN</th>
                    <th>BOOK TITLE</th>
                    <th class="authorName">AUTHOR NAME</th>
                    <th>SERIES</th>
                    <th>Quantity</th>
                    <th class="details">DETAILS</th>

                </tr>

                <form action="borrow-request.php" method="POST">
                <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($query)){
                    ?>
                        <td class="image"> <?php echo '<img src="data:image;base64,' .base64_encode($row['Image']).'" alt="Image" style="width: 82px; height: 172px;">'; ?></td>
                        <td> <?php echo $row['ISBN']; ?></td>
                        <td> <?php echo $row['Title']; ?></td>
                        <td> <?php echo $row['Author']; ?></td>
                        <td> <?php echo $row['Series']; ?></td>
                        <td> <?php echo $row['Quantity']; ?></td>
                        <td class="desc"> <?php echo $row['Description']; ?></td>
                        <input type="hidden" name="ISBN" value="<?php echo $row['ISBN']; ?>">
                        <input type="hidden" name="quantity" value="<?php echo $row['Quantity']; ?>">
                        <input type="submit" name="confirm" value="CONFIRM">
                        <input type="submit" name="cancel" value="CANCEL">
                </tr>
                    <?php
                        }
                    ?>
                </form>
            </table>
    </div>

</body>
</html>