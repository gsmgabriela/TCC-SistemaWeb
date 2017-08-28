
    <form class="opcoesBuscaEntrega" action="@yield( 'listaEntregadores', route('entregador.index'))" >

            <select name="entregadores">

                <option>Selecione um Entregador</option>
            </select>
            <input  name="cpfcnpj" placeholder="CPF/CNPJ do Cliente">
            <input  name="numeroPedido" placeholder="Número do Pedido">

            <button class=" btn btn-success" type="submit">Buscar</button>
    </form>



<form class="form-horizontal formAddEntrega" action="@yield( 'nova', route('entregas.create'))" >
    <div class="form-group">
            <button type="submit" class="btn btn-primary ">Adicionar Nova</button>
    </div>
</form>
