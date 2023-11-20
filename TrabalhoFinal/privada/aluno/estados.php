<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$estados = array(
    "AC" => "Acre",
    "AL" => "Alagoas",
    "AP" = > "Amapá",
    "AM" = > "Amazonas",
    "BA" = > "Bahia",
    "CE" = > "Ceara",
    "DF" = > "Dsitrito Federal",
    "ES" = > "Espírito Santo",
    "GO" = > "Goiás",
    "MA" = > "Maranhão",
    "MT" = > "Mato Grosso",
    "MS" = > "Mato Grosso do Sul",
    "MG" = > "Minas Gerais",
    "PA" = > "Pará",
    "PB" = > "Paraíba",
    "PR" = > "Paraná",
    "PE" = > "Pernambuco",
    "PI" = > "Piauí",
    "RJ" = > "Rio de Janeiro"
);

echo json_encode($estados);
?>
