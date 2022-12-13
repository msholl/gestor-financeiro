<x-layout title="Novo Lançamento">
    <form class="row g-3" action="" method="post">
        @csrf
        <div class="col-12">
            <label for="tipo-lancamento" class="form-label">Tipo do lançamento</label>
            <input type="text" class="form-control" id="tipo-lancamento" placeholder="Cartão de crédito">
        </div>
        <div class="col-12">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Pagamento cartão de crédito novembro/2022">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
    </form>
</x-layout>
