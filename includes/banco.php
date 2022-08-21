<?php
$banco = new mysqli("localhost","root","","catalogado");

if ($banco->connect_errno) {
    echo "<p>Erro encontrato</p>";
    die();
}

$jogos = $banco->query("select * from jogos");


