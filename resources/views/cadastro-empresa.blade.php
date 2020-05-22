@include('layout.app')
<h1>Cadastro de empresa</h1>
<div class="mt-3">
    <div class="container">
        <form action="{{route('cadastrar-empresa')}}" method="POST">
            @csrf
            <div class="">
                <input type="text" name="nome">
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>
    </div>

    <div>
        @include('flash::message')
    </div>
</div>