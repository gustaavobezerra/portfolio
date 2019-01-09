<?php
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $msg = $_POST['mensagem'];


    $headers = "From: ". $nome;

    $corpoemail = 'Novo email

                   Nome: '   .$nome.' 
                   Email:'   .$email.'
                   Assunto:' .$assunto.' 
                   Mensagem:'.$msg.' ';

    if(mail("gustavoc.b@hotmail.com", $nome, $corpoemail, $headers)){

		   header("Location: index.html");
           

    } else{

          echo "<script>alert('Erro ao enviar email.');</script>";  

    }
	

?>