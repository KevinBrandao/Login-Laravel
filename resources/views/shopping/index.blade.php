<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
<h2>Olá, {{$user->name}} realize suas compras</h2>
    <center><h1>Lista de Compras</h1>
   
    <form action="/shopping/store" method="POST" >  
    @csrf
        <input name="name" placeholder="Nome do Item">
        <button type="submit">Adicionar</button>
    </form>
    <hr>
    </center>
    @foreach ($items as $item)
        <h2>{{$item->name}}</h2>
    @endforeach
     
</body>
</html>