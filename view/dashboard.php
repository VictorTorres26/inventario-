<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
</head>

<body>
    <?php
    require_once '../componentes/sidebar.php';
    ?>
    <div class="content">
        <?php
        require_once '../componentes/navbar.php';
        ?>
        <main>
            <?php
                require_once '../componentes/headers/header.php';
                require_once '../componentes/insights.php';
                require_once '../componentes/table.php';
                require_once '../componentes/reminders.php';
            ?>
    
        </main>
    </div>
    <script src="../recursos/js/funciones.js"></script>
 
</body>
</html>