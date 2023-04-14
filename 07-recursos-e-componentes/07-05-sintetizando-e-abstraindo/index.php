<?php

use Source\Core\Email;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.05 - Sintetizando e abstraindo");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ synthesize ]
 */
fullStackPHPClassSession("synthesize", __LINE__);

$email = (new Email())->bootstrap(
    "Olá mundo este é o meu e-mail",
    "<h1>Olá mundo</h1><p>Essa é uma mensagem via rotina de aplicação</p>",
    "danielsobralnascimento@gmail.com",
    "Daniel Sobral do Nascimento"
);

$email->attach(__DIR__ . "/teste.txt", "teste.txt");

// var_dump($email);

if ($email->send()) {
    echo message()->success("E-mail enviado com sucesso");
} else {
    echo $email->message();
}