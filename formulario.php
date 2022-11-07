<?php

include("clientes_bd.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
        $name_client = trim($_POST['name']);
        $email_client = trim($_POST['email']);
        $tel_client = trim($_POST['tel']);
        $message_client = trim($_POST['message']);
        // $fecha_recepcion = date("d/m/y");
        $consulta = "INSERT INT todos(name_client, email_client, tel_client, message_client) VALUE('$name_client', '$email_client', '$tel_client', '$message_client')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("Santa Mónica | Contacto", "¡Tu mensaje ha sido enviado!", "success");
                </script>
            <?php
        } else {
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("Santa Mónica | Contacto", "¡No fue enviado tu mensaje, intenta nuevamente!", "error");
                </script>
            <?php
        }
    } else {
        ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("Santa Mónica | Contacto", "¡Olvidaste rellenar los campos!", "warning");
            </script>
        <?php
    }
}
?>
