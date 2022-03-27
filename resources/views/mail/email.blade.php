<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>cotizacion realizada correctamente</h2>
    <br>
    <h3>los datos con los que se realizo son:</h3>
    <br>
    <ul>
        <li>Nombre completo: {{' '.$datos->nombre_completo}}</li>
        <li>Email: {{' '.$datos->email}}</li>
        <li>Numero celular completo: {{' '.$datos->numero_celular}}</li>
        <li>Departamento: {{' '.$datos->departamento}}</li>
        <li>Ciudad: {{' '.$datos->ciudad}}</li>
        <li>Modelo: {{' '.$datos->modelo}}</li>
    </ul>
</body>
</html>