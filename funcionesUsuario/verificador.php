<?php  
    include ('../viajero/conexion.php');
//print_r($_GET);
$ClientID="ARbQl5iIa_f-RUAQF8Ncj6RCg4czBaKawudng8iX52hmyx2qNz2XNRNa2GR1LU0mCGGplSgCwl3p9aGj";
$Secret="EP-cMTZj4mQ41-PEpZrZmJ3pCXHNeGq4QKYfgtD3hy4lYqXrmKTJMJKImtn7d-4kHop0-ILEdRz_YLD4";
//API DE PAYPAL
$Login = curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($Login, CURLOPT_USERPWD, $ClientID.":".$Secret);
curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

$respuesta=curl_exec($Login);

$objRespuesta=json_decode($respuesta);

$AccessToken=$objRespuesta->access_token;
$venta=curl_init("https://api.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);
curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));
curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);
$respuestaVenta=curl_exec($venta);
//print_r("$respuestaVenta");
//navegando en los datos que da la api de Paypal
$objDatosTransaccion=json_decode($respuestaVenta);
$state=$objDatosTransaccion->state;
$emai=$objDatosTransaccion->payer->payer_info->email;
$total=$objDatosTransaccion->transactions[0]->amount->total;
$currency=$objDatosTransaccion->transactions[0]->amount->currency;
$custom=$objDatosTransaccion->transactions[0]->custom;
$clave=explode("#", $custom);
$idEnvio=$clave[0];
$claveVenta=$clave[1];
 curl_close($venta);
 curl_close($Login);

 if($state=="approved"){
     $mensajePaypal="<h3> SU PAGO HA SIDO APROVADO </h3>";
     $sentencia = $link->prepare("UPDATE `nuevoenvio` 
     SET `PaypalDatos` =  :PaypalDatos, 
     `Estado` = 'aprobado' 
     WHERE `nuevoenvio`.`ID_NEnvio` = :ID_NEnvio;");
     $sentencia->bindParam(":ID_NEnvio" ,$claveVenta);
     $sentencia->bindParam(":PaypalDatos" ,$respuestaVenta);
     $sentencia->execute();

     //pasar a pago completo
     $sentencia = $link->prepare("UPDATE `nuevoenvio` 
     SET   `Estado` = 'completo' 
     WHERE `PaypalDatos` = :PaypalDatos
     AND `Precio_final` = :TOTAL
     AND `ID_NEnvio` = :ID_NEnvio");
     $sentencia->bindParam(':ClaveTransaccion' ,$claveVenta);
     $sentencia->bindParam(':TOTAL' ,$total);
     $sentencia->bindParam(':ID_NEnvio' ,$claveVenta);
     $sentencia->execute();


 }else{
    $mensajePaypal="<h3> OCURRIO UN ERROR CON SU PAGO EN PayPal. </h3>";
 }

echo $mensajePaypal;
?> 
