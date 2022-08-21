<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "./includes/banco.php";
    ?>
    <div id="corpo">
        <h1>Escolha o jogo</h1>
        <table class="listagem">
            <?php
            while ($jogo = $jogos->fetch_object()) {
                echo "  <tr>
                            <td><img src='./images/$jogo->capa' alt='Minha Figura'></td>
                            <td>$jogo->nome</td>
                            <td>Adm</td>
                        </tr>";
            }
            ?>

        </table>
    </div>
</body>

</html>