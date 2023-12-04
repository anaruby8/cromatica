
    <link rel="icon" type="image/png" href="logopng.png"> <!-- Reemplaza 'ruta/imagen.png' con la ruta a tu ícono -->
    <!-- Resto de las etiquetas meta y estilo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesContactanos.css">
    <link rel="stylesheet" href="stylesAgenda.css"> <!-- Enlace al archivo CSS externo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">


</head> 
<body>

    <header style="position: fixed; top: 0; left: 0; right: 0; z-index: 100;">
        <div id="logo">
            <a id="enlace-derecho" href="Home.php"><img src="logo.jpeg" alt="Logo"></a>
            <span id="cromatica" href="Home.php">Cromática</span>
        </div>

        <div id="menu">
            <a href="agenda.php">Agenda</a>
            <a href="obras.php">Obras</a>
            <a href="artista.php">Artistas</a>
        </div>

        <div id="search-container">
            <div id="search-box">
                <input type="text" id="search-input" placeholder="Buscar artista/obra...">
            </div>
        </div>  
            <div id="login-container">
                <a href="Login.html"><button id="login-button" style="display: none;">Iniciar sesión</button></a>
            </div>

            <div class="dropdown">
                <img src="usuario.png" alt="Logo" width="50">
                <div class="dropdown-content">
                <a href="editarPerfil.html">Modificar</a>
                <a href="index.php">Cerrar Sesion</a>
                </div>
            </div>
            
        

    </header>
    <div class="contenido">

    