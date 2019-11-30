<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
            echo $this->Form->create('Mensaje');
            echo $this->Form->input('mensaje');
            echo $this->Form->end('Enviar mensaje');
        ?>
</body>
</html>