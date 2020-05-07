<?php

    $nome      = $_POST["nome"];
    $email   = $_POST["email"];
    $fone  = $_POST["fone"];
    $assunto   = "Envio pelo Site";
    $mensagem  = $_POST["mensagem"];

    global $email;

    $data      = date("d/m/y");
    $ip        = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $hora      = date("H:i");

    mail ("jhsoares57@gmail.com",
    	"$assunto",
    	"Nome: $nome\n
	Data: $data\n
	Ip: $ip\n
	Navegador: $navegador\n
	Hora: $hora\n
	E-mail: $email\n
	Telefone: $fone\n\n
	Mensagem: $mensagem",
    "From: $email"
    );

    $site   = "jhsoares57@gmail.com";
    $titulo = "Hugo Barros";
    $msg    = "$nome, obrigado por entrar em contato, em breve retorno.";

    mail("$email",
    "$titulo",
    "$msg",
    "From: $site"
    );
    echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
    echo "<p align=center>Estaremos retornando em breve.</p>";
    echo "<p align=center>
		<a href=/index.html>
			Clique para voltar
		</a> </p>";
    // echo "<p align=center>	
		// <a href=deslogar.php>
		// 	Clique para deslogar.
		// </a>
	  // </p>";
?>