<?
function calcularTiempo($fecha_Inicio, $fecha_Fin){
    $datatime1 = date_create($fecha_Inicio);
    $datatime2 = date_create($fecha_Fin);
    $interval = date_diff($datatime1, $datatime2);

    $tiempo=array();
    foreach ($interval as $valor) {
        $tiempo[] = $valor;
    }
    return $tiempo;
}




?>