@include('layout.app')

<h1>usuarios</h1>

<table class="table">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Empresa</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($allUsuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->empresa->nome}}</td>
                <td>
                    <form action="/editor-usuario/{{$usuario->id}}" method="GET">
                        <button type="submit">Editar Usuario</button>
                    </form>
                    </td>
                <td>
                    <form action="/deletar-usuario/{{$usuario->id}}" method="post">
                        @csrf
                        <button type="submit" >Deletar Usuario</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
.table {
    border: 1px black;
}
</style>