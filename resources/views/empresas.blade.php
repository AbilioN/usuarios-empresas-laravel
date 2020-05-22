@include('layout.app')

<h1>empresas</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>
                    Empresa
                </td>
                <td>
                    Funcionarios
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($allEmpresas as $empresa)
                <tr>
                    <td>{{$empresa->nome}}</td>
                    @foreach ($empresa->funcionarios as $funcionario)
                        
                        <td>{{$funcionario->nome}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<style>
    .table {
    border: 1px black;
    }
</style>