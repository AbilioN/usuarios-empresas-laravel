@include('layout.app')

<h1>usuarios</h1>

<table>
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
            </tr>
        @endforeach
    </tbody>
</table>