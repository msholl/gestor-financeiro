<x-layout title="Novo Lançamento">
    <form class="row g-3" action="/lancamentos/salvar" method="post">
        @csrf
        <div class="col-12">
            <label for="nome-lancamento" class="form-label">Nome do lançamento</label>
            <input type="text" class="form-control" id="nome-lancamento" placeholder="Cartão de crédito">
        </div>
        <div class="col-8">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Pagamento cartão de crédito novembro/2022">
        </div>
        <div class="col-4">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" placeholder="R$">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
    </form>
</x-layout>
