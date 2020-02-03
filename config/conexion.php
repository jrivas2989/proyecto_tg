<?php
	
    //$conn = new mysqli("localhost","root","","supportix");

    $link = mysqli_connect("localhost", "root", "", "supportix");

    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }else{
        // printf("Bien");
    }

    if ($result = mysqli_query($link, "SELECT * FROM datos WHERE estado = 0")) {

        /* determinar el número de filas del resultado */
        $row_cnt = mysqli_num_rows($result);
    
        printf("El resultado tiene %d filas.\n", $row_cnt);
    
        /* cerrar el resulset */
        mysqli_free_result($result);
    }

    /* cerrar la conexión */
    // mysqli_close($link); Si descomentas esto, se cierra la conexión, y no ejecuta mas nada.


    /*
    $count = 0;
    $sql2 = "SELECT * FROM datos WHERE estado = 0";
    $result = mysqli_query($link, $sql2);
    $count = mysqli_num_rows($result);*/