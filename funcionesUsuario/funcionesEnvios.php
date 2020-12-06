<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
    
    
    include ('../viajero/conexion.php');

    $estado_origen = ($_POST['Estado_Origen']);
    $estado_destino = ($_POST['Estado_Destino']);
    $fecha_envio = ($_POST['Fecha_Envio']);
    $comentario = ($_POST['Comentario']);
    $id = ($_POST['ID_Cliente']);
    $correo = ($_POST['correo']);
    $norte  = array('Baja California', 'Baja California Sur', 'Sonora','Chihuahua', 'Sinaloa','Coahuila', 'Durango', 'Nuevo Leon' );
$centro  = array('Zacatecas','Nayarit','Aguascalientes','San Luis Potosi','Guanajuato','Jalisco', 'Colima','Queretaro', 'Hidalgo', 'Tlaxcala', 'CDMX', 'Michoacan', 'Morelos');
$sur  = array('Guerrero','Puebla','Veracruz','Oaxaca','Tabasco','Chiapas', 'Quintana Roo', 'Campeche','Yucatan');

    
    foreach($centro as $centro1){
        $lev = levenshtein($estado_origen, $centro1);
        if($lev == 0){
            $origen=2;
        }
    }
    foreach($norte as $norte1){
        $lev = levenshtein($estado_origen, $norte1);
        if($lev == 0){
            $origen=3;
        }
    }
    foreach($sur as $sur1){
        $lev = levenshtein($estado_origen, $sur1);
        if($lev == 0){
            $origen=1;
        }
    }


    foreach($centro as $centro1){
        $lev = levenshtein($estado_destino, $centro1);
        if($lev == 0){
            $destino=2;
        }
    }
    foreach($norte as $norte1){
        $lev = levenshtein($estado_destino, $norte1);
        if($lev == 0){
            $destino=3;
        }
    }
    foreach($sur as $sur1){
        $lev = levenshtein($estado_destino, $sur1);
        if($lev == 0){
            $destino=1;
        }
    }
    $ZCT = 1;
    $ZST = 0;
    $ZNT = 2;

    $ZCTO = 1;
    $ZSTO = 0;
    $ZNTO = 2;


            if($origen == 1){
               $ZT = $ZNTO; 
               } elseif ($origen == 2){
                $ZT = $ZCTO;
            }
            if($origen == 3){
                $ZT = $ZSTO;
            }


            if($destino == 1){
                $ZT2 =  $ZNT; 
            } elseif($destino == 2){
                $ZT2 = $ZCT;
            } 
            if($destino == 3){
                $ZT2 = $ZST; 
            }

            $precioTemporal = $ZT - $ZT2;
            if($precioTemporal == 0){
                $precioFinal = 150;
            } elseif($precioTemporal == 1){
                $precioFinal = 200;
            } else{
                $precioFinal = 250;
            }
            echo $destino;
            echo $origen;



    $paypal = 'AASHJDHJHJD612334';
    $estado = 'pendiente';
    $consulta= $link -> prepare("INSERT INTO nuevoenvio (ID_Cliente, Estado_Origen, Estado_Destino, Fecha_Envio, Comentario, Precio_final, PaypalDatos, Fecha, Correo, Estado) 
     VALUES (:ID_Cliente, :Estado_Origen, :Estado_Destino, :Fecha_Envio, :Comentario, '$precioFinal', '$paypal', NOW(), :correo, '$estado')");
    $consulta ->bindParam(':ID_Cliente',$id);
    $consulta->bindParam(':Estado_Origen',$estado_origen);
    $consulta ->bindParam(':Estado_Destino',$estado_destino);
    $consulta ->bindParam(':Fecha_Envio',$fecha_envio);
    $consulta -> bindParam(':Comentario',$comentario);
    $consulta -> bindParam(':correo',$correo);
   
    if($consulta->execute()){
        $IdEnvio= $link->lastInsertId();?>
    

         <script src="https://www.paypalobjects.com/api/checkout.js"></script>
         <style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>      
     <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
        <h1 class="display-4"> ¡Paso Final! </h1>
        <hr class="my-4">
        <p class="lead"> Estas a punto de pagar con @PayPal un total de:
            <h4> $ <?php echo number_format($precioFinal, 2); ?> </h4>
            <div id="paypal-button-container"></div>
        </p>
        <p> Podrá descargar el comprobante de pago </p> </br>
        <strong> (Para aclaraciones  :paquetitosdoki@gmail.com)</strong>
    </p>
         </div>
         </div>

         <?php 
         
   ?>
<script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'blue'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
            sandbox:    'ARbQl5iIa_f-RUAQF8Ncj6RCg4czBaKawudng8iX52hmyx2qNz2XNRNa2GR1LU0mCGGplSgCwl3p9aGj',
            production: 'AWWRVH9GQaRBm24WSlv6qBKPJ8fwgylb523sH20-FVEaVWc8oZsaKaMWmeDzYZbgf3M_enTnLvTRpypB'
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $precioFinal;?>', currency: 'MXN' }, 
                            description:"Pago de envio:$ <?php echo number_format($precioFinal,2);?>",
                            custom:"<?php echo $id;?>#<?php echo $IdEnvio ; ?>"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
    
    }, '#paypal-button-container');
 
</script>
       <?php
    }else
    
        ?>
    <!--<script> alert("Ya tiene un envio registrado") 
     window.location.href='../usuario/Envios.php'; </script>-->
    
      


   