<?php

 $this->load->library('my_phpmailer');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "box547.bluehost.com";
$mail->SMTPAuth = true;
$mail->Username = "admin@lowrysmartportal.com";
$mail->Password = "Lowry123$"; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;         
$mail->From = "admin@lowrysmartportal.com";
$mail->FromName = "Lowrysmartportal.com";			
           
        $mail->Subject    = "";  
        $mail->Body      = "Cuerpo en HTML<br />";
        $mail->AltBody    = "Cuerpo en texto plano";
		
        $destino = "uzwal.chaganti@livait.com";
        $mail->addAddress($destino, "uzwal");

         if(!$mail->Send()) {  
            $data["message"] = "Error: " . $mail->ErrorInfo;  
        } else {  
            $data["message"] = "Message sent correctly!";  
        } 
          

?>