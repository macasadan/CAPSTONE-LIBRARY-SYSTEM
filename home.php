<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Optional Custom JS -->
    <script src="js/script.js" defer></script>
</head>
<body>

    <?php include('header.php'); ?>
    <?php include('nav.php'); ?>

    <div class="container mt-4">
        <?php include('alert.php'); ?>
        <?php include('sections.php'); ?>
    </div>

    <?php include('footer.php'); ?>
    <?php include('login_modal.php'); ?>

</body>
</html>
