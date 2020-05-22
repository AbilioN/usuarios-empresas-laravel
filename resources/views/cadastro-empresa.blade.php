@include('layout.app')
<h1>Cadastro de empresa</h1>
<div class="">
    <div class="">
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