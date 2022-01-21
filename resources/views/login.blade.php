<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
        <h1>Login</h1>
        <form action="/signin" method="POST">
            @csrf
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Senha">
                    <button type="submit">Enviar</button><br><br>

        </form>
        <a href="/register">Cadastre-se</a>

</body>
</html>