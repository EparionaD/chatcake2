<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat en cakePHP</title>
</head>
<body>
    <h1>Chat para los usuarios</h1>
    <div>
        <iframe action="" src="<?=$this->Html->url("/Mensaje/mostrar")?>" frameborder="0" width="100%" height="500">jkonji</iframe>
    </div>
    <div>
        <?php
            echo $this->Form->create('Mensaje');
            echo $this->Form->input('mensaje');
            echo $this->Form->end('Enviar mensaje');
        ?>
    </div>
</body>
</html>