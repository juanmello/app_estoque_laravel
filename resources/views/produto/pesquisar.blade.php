<html>
<link href="../../css/app.css" rel="stylesheet">

<head>
  	<meta charset="utf-8">
</head>

        <div class="container">
        <h1 class="mt-2">Inserir produto</h1>
        <form action="/produtos/inserir" method="post" class="mt-2">
	    <input type="hidden" name="_token" value="{ { { csrf_token() } } }">
            <div class="form-group">
                <label for="descricao">Descrição: <span class="text-danger">*</span></label>
                <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade: <span class="text-danger">*</span></label>
                <input type="number" id="quantidade" name="quantidade" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor: <span class="text-danger">*</span></label>
                <input type="number" id="valor" name="valor" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="data_vencimento">Data de vencimento: </label>
                <input type="date" id="data_vencimento" name="data_vencimento" class="form-control">
            </div>
            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Inserir">

        @if(count($produtos) == 0)
            <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
        @else
            <table class="table mt-2 text-center">
                <tr>
                    <th>Id</th>
                    <th class="text-left">Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Data de vencimento</th>
                    <th></th>
                    <th></th>
                </tr>
        @foreach ($produtos as $p)
                    <tr>
                        <td>{ { $p->id } }</td>
                        <td class="text-left">{ { $p->descricao } }</td>
                        <td>{ { $p->quantidade } }</td>
                        <td>{ { $p->valor } }</td>
                        <td>{ { $p->data_vencimento } }</td>
                        <td><a href="/produtos/excluir/{ { $p->id } }"><button class="btn btn-danger">Excluir</button></a></td>
                        <td><a href="/produtos/alterar/{ { $p->id } }"><button class="btn btn-warning">Alterar</button></a></td>
                    </tr>
        @endforeach
            </table>
        @endif
        </form>

        <h1 class="mt-2">Pesquisa de produtos</h1>
        @if(!empty($mensagem))
            <div class="alert alert-success mt-2">{ { $mensagem } }</div>
        @endif
    </div>



</html>

     