<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['asunto']) && !empty($_POST['email_paciente']) && !empty($_POST['resultado'])){
        $asunto = $_POST['asunto'];
        $email_paciente = $_POST['email_paciente']; 
        $resultado = $_POST['resultado'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion(); 
        $mail = @mail($email_paciente,$asunto,$resultado,$header);
        if ($mail) {
            echo "<h4> Email enviado exitosamente</h4> ";
        }
    }

}



?>