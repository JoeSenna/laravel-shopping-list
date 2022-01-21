<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de compras</h1>
    <form action="/shopping/store" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome do Item">
        <input type="submit" value="Adicionar">
    </form>
    <hr>
    @foreach ($items as $item)
        <h2>{{ $item->name }}</h2>
        
        @endforeach
</body>
</html>