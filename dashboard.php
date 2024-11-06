<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang Admin</title>
    <link rel="stylesheet" href="styles/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include('navbar-admin.php') ?>
    <div class="main-container">
        <div class="secondary-container">
            <div class="container-header">
                <p>Selamat Datang Admin</p>
            </div>
            <div class="container-menu">
                <!-- Link ke halaman user -->
                <a href="accountList.php" class="container-user-link">
                    <div class="container-user">
                        <i class='bx bx-user'></i>
                        <p>20</p>
                        <p>Total User</p>
                    </div>
                </a>
                <!-- Link ke halaman artwork -->
                <a href="allPost.php" class="container-postingan-link">
                    <div class="container-postingan">
                        <i class='bx bx-image-add'></i>
                        <p>20</p>
                        <p>Total ArtWork</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>