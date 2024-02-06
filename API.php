<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TAREA 09</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 20px;
            }
            table, th, td {
                border: 1px solid;
            }
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #04AA6D;
                color: white;
            }
            tr:nth-child(even){background-color: #f2f2f2;}

        </style>
    </head>
    <body>
        <h1> Tarea 09 - Servicio Web JSON Placeholder </h1>
        <?php
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $json = file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments');
            // Se decodifica el fichero JSON y se convierte a objeto
            $nojson = json_decode($json); 
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>DESCRIPCION</th>
            </tr>
            <?php foreach($nojson as $valor): ?>
            <tr>
                <td><?php echo $valor -> id ?></td>
                <td><?php echo $valor -> name;?></td>
                <td><?php echo $valor -> email;?></td>
                <td><?php echo $valor -> body;?></td>
            </tr>    
            <?php endforeach; ?>        
        </table>
    </body>
</html>
