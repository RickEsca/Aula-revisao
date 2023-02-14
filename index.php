<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="post">
        <input type="number"    name="tab" placeholder = "tab">
        <input type="number"    name="inicio" placeholder = "inicio">
        <input type="number"    name="fim" placeholder = "fim">
        <input type="submit" value="Enviar">
    </form> -->

    <a href="/">Home</a>
    <a href="?page=1">Pagina1</a>
    <a href="?page=2">Pagina2</a>
    <a href="?page=3">Pagina3</a>
    <a href="?page=4">Pagina4</a>

    <?php
        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }

        if (isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case '1';
                require_once './page/P1.php';
                break;
                case '2';
                require_once './page/P2.php';
                break;
                case '3';
                require_once './page/P3.php';
                break;
                case '4';
                require_once './page/P4.php';
                break;
            }
        };
    ?>
</body>
</html> 