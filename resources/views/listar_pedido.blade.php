<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pedidos</title>
</head>
<body>
@if(count($pedidos) == 0)
    <h3>Sem pedidos</h3>      
  @else
  <table border="1">
    <tr>
        <th>Usuário</th>
        <th>Descrição</th>
        <th>Items</th>
    </tr>
    @foreach ($pedidos as $pedido)
    <ul>
        <li>{{$pedido->user}}</li>
        <li>{{$pedido->items}}</li>
        <li>{{$pedido->calculateTotal}}</li>
    <hr>
    </ul>
 
    @endforeach
</body>
</html>