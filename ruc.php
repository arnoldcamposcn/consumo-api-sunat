<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>


<div class="container">
        <div class="content">
        <h1>Consulta RUC</h1>

        <br>
        <input type="text" autocomplete="off" id="ruc" name="ruc" placeholder="Ingresa RUC">

        <button id="pruebaruc">Consultar</button>
        <br>
        <br>
        <div >RUC: <label id="rucNumero"> </label></div>

        <div >Nombre o Razón social: <label id="razonsocial">  </label ></div>

        <div> Estado: <label  id="estado"> </label > </div>

        <div> Dirección: <label  id="direccion"> </label > </div>

        <div> Departamento: <label  id="departamento"> </label > </div>
        <br>
        <a href="index.php"><h4>[Consulta DNI]</h4></a>
        </div>
        </div>


<script>

$("#pruebaruc").click(function(){

  var ruc=$("#ruc").val();


$.ajax({           
    type:"POST",
    url: "consultar-ruc-ajax.php",
    data: 'ruc='+ruc,
    dataType: 'json',
    success: function(data) {
  
    
        if(data==1)
        {
            alert('El RUC tiene que tener 11 digitos');
        }
        else{
            console.log(data);
          
            $("#rucNumero").html(data.numeroDocumento);
            $("#razonsocial").html(data.nombre);
            $("#estado").html(data.estado);

            $("#direccion").html(data.direccion);
            $("#departamento").html(data.departamento);
        }
 

    }
});

})

</script>
</body>
</html>
   