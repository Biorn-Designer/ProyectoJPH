<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['asunto'])  && !empty($_POST['email']) && !empty($_POST['mensaje']) && !empty($_POST['terminos'])){
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $terminos = $_POST['terminos'];
        $email_jph = "alcalde.rubio.jean@gmail.com";

        $header = "From: noreply@jph.cl" . "\r\n";
        $header.= "Reply-To: alcalde.rubio.jean@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();

        $mail = @mail($email_jph, $asunto, $mensaje, $header);
        if($mail){
            echo "<h4>¡Mail enviado exitosamente! </h4>";
        }
    }

}

?>