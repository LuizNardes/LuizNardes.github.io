
<?php

include 'configuracao_banco.php';
if(!$conn_DevConfig) die( nl2br(print_r( sqlsrv_errors(), true)) );

$i=0;
$myArr = [];

$sql="SELECT * FROM itens_padronizados";


$output=sqlsrv_query($conn_DevConfig,$sql) or die(print_r(sqlsrv_errors()));
while($row = sqlsrv_fetch_array($output)){

    $dados = array( 
        'DESCRICAO_ITEM' => $row["descricao_item"],
        'VALOR_ITEM' => $row["valor_item"]
    );
   
    $myArr[$i] = $dados;
    $i++;
}

$myJSON = json_encode($myArr);

echo $myJSON;



	
