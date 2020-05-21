@include('layout.app')

<h1>Cadastro Usuario</h1>

<div class="">
    <div class="">
        <form action="{{route('cadastrar-usuario')}}" method="POST">
        @csrf

            <div class="">
                <div class="">
                    <input class="col-8" type="text" name="nome" placeholder="Nome Completo">
                    <input class="col-2" type="text" name="idade" placeholder="idade">
                </div>
                <h4>endereço:</h4>
                <div>
                    <input type="text" name="rua" id="rua" placeholder="rua">
                    <input type="text" name="numero" id="numero" placeholder="numero">
                    <input type="text" name="bairro" id="bairro" placeholder="bairro">
                    <input type="text" name="cidade" id="cidade" placeholder="cidade">
                    <input type="text" name="estado" id="estado" placeholder="estado">
                    {{-- @TODO : futuramente trocar este imput de estado por option para o array das federacoes nacionais --}}

                </div>
            </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div>
        @include('flash::message')
    </div>
</div>