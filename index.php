<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>
        <?php 
            $server="127.0.0.1";$user="root";$pass="";$db="videojuegos";
            $conn=mysqli_connect($server,$user,$pass,$db);



            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
                echo "Connected successfully";
              
            $query="Select * from cliente";
            $results=$conn->query($query);
            if ($results->num_rows > 0) {
                // output data of each row
                while($row = $results->fetch_assoc()) {
                  echo "<br> id: " . $row["clave"]. " - nombre: " . $row["nombre"]. "- Direccion " . $row["direccion"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();


        ?>

    </h2>
    <h2>holaaaaa me caga git </h2>
    
    <?php 
        echo "<h1>";
        for ($i=0; $i < 10; $i++) { 
            echo $i.",";
        }
        echo "</h1>"
    ?>
    <textarea name="" id="">bueno ya vidms que pdo con esto </textarea>

    <i>Esto lo hizo la rama Fernandoa</i>
    <img src="D:\Archivos\Imagenes\Camera Roll\WIN_20240523_14_48_31_Pro.jpg" alt="">
<<<<<<<<< Temporary merge branch 1
    <a href="">tuamdrea</a>
=========
>>>>>>>>> Temporary merge branch 2
</body>
</html>