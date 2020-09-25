<html>
<head> 
    <link rel="stylesheet" href="css/prueba.css">
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <header>
    <div id="menucentrado">
        <ul>
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="presentacion.html">Quiénes somos</a></li>
            <li class="dropdown">
                <a href="servicios.html" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="desarrollo.html">Desarrollo</a>
                    <a href="redes.html">Redes</a>
                    <a href="sistemas.html">Sistemas</a>
                
            </div></li>
            <li><a href="#" class="activo">Inscripción</a></li>
            
        </ul>
    </div>
    </header>
    <main>
    <h1>Datos inscripción</h1>
    <p>Se han recogido los siguientes datos:</p>
    <table>
        <tr>
            <th>Nombre</th>
            <td> <?php print_r($_REQUEST["nombre"]);?> </td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td> <?php print_r($_REQUEST["apellido"]);?> </td>
        </tr>
        <tr>
            <th>Email</th>
            <td> <?php print_r($_REQUEST["email"]);?> </td>
        </tr>
        <tr>
            <th>Intereses</th>
            <td> 
            <?php 
            if(isset($_REQUEST["redes"])){ 
                echo "<p>Redes</p>"; 
            }
            if(isset($_REQUEST["sistemas"])){ 
                echo "<p>Sistemas</p>"; 
            } 
            if(isset($_REQUEST["desarrollo"])){ 
                echo "<p>Desarrollo</p>"; 
            }
            ?> 
            </td>
        </tr>
    </table>
   
    </main>
    <footer>
        <p>Empresa molona</p>
    </footer>
</body>
</html>