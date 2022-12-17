<h1>Novo usuário</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">



    <div class="mb-3">
        <Label>Nome</Label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <Label>E-mail</Label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <Label>Senha</Label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <Label>Data de Nascimento</Label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="bnt bnt-primary">Enviar</button>
    </div>
    
    </body>
</html>
