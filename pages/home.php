<!-- index.php or your HTML file -->

<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/header.php'); ?>
<body style="background-image: url('../php-attendance/pages/bg4.jpg'); background-repeat: no-repeat;background-size:cover; margin: 0; height: 100vh;">
    <?php include_once('inc/navigation.php'); ?>
    <div class="container-md py-3">
        <?php if(isset($_SESSION['flashdata']) && !empty($_SESSION['flashdata'])): ?>
            <!-- Your existing flashdata code -->
        <?php endif; ?>
        <div class="main-wrapper">
            <div class="page-title" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px;">
                Welcome To Chetu Attendance Portal!
            </div>
            <?php include_once("pages/{$page}.php"); ?>
        </div>
    </div>
    <?php include_once('inc/footer.php'); ?>
</body>
</html>
