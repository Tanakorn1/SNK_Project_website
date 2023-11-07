<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>SLOT-NANKAI
        Company Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/Css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    $req_uri = $_SERVER['REQUEST_URI'];
    // echo $req_uri;
    // echo $_SERVER['REQUEST_URI'];
    if ($req_uri === '/') {
        // เปลี่ยน URL เป็น /home
        header('Location: /th/home');
        exit;
    }

    switch ($req_uri) {
        case '/th/home':
            include "./pages/th/home.php";
            break;
        case '/en/home':
            include "./pages/en/home.php";
            break;
        case '/Test':
            include "./Test.php";
            break;
        default:
            break;
    }
    ?>
    <!-- <script>
        console.log("Hi");
    </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>