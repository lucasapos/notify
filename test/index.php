<?php
require __DIR__ . "/../vendor/autoload.php";

use Notification\Email;

$novoEmail = new Email(2, "mail.rtlsolucoes.com.br", "contato@rtlsolucoes.com.br", "@rtlsolucoesjw20", "tls", "587", "contato@rtlsolucoes.com.br", "Equipe Nexo");
$novoEmail->sendMail("Assunto de teste", "<h2>Lucas Oliveira</h2> <p>=)</p>", "lucas@nexodigital.com.br", "Oliveira Nexo", "aplucasoliveira@gmail.com", "Lucas Oliveira", );

var_dump($novoEmail);