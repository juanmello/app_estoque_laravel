<html>
<link href="../../css/app.css" rel="stylesheet">

<head>
    <meta charset="utf-8">
</head>
    <div class="container">
    <h1 class="mt-2">Alterar produto</h1>
    <form action="/produtos/alterar" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{ { { csrf_token() } } }">
        <div class="form-group">
            <label for="id">ID: <span class="text-danger">*</span></label>
            <input type="text" id="id" name="id" class="form-control" required readonly value="{ { $produto->id } }">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: <span class="text-danger">*</span></label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required value="{ { $produto->descricao } }">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade: <span class="text-danger">*</span></label>
            <input type="number" id="quantidade" name="quantidade" class="form-control" required value="{ { $produto->quantidade } }">
        </div>
        <div class="form-group">
            <label for="valor">Valor: <span class="text-danger">*</span></label>
            <input type="number" id="valor" name="valor" class="form-control" required value="{ { $produto->valor } }">
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de vencimento: </label>
            <input type="date" id="data_vencimento" name="data_vencimento" class="form-control" value="{ { $produto->data_vencimento } }">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>
</html>
