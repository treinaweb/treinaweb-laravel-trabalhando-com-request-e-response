<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <label for="nome">Nome: </label>
        <input type="text" name="nome">
        <br/>

        <label for="idade">Idade: </label>
        <input type="text" name="idade">
        <br/>

        <label for="foto">Foto: </label>
        <input type="file" name="foto">
        <br/>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>