<?php
    $usuario = [
        'nome'=>'Erllan',
        'sobrenome' => 'Rego'
    ];

    var_dump($usuario);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Array PHP</title>
    </head>
    <body>
        <p>Meu nome é <?=$usuario['nome']; ?> <?=$usuario['sobrenome']; ?></p>
    </body>
</html>