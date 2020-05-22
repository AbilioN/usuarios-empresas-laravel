@include('layout.app')


<div class="container" >
    <h1>Cadastro Usuario</h1>

    <div class="row">
        <form action="{{route('cadastrar-usuario')}}" method="POST">
        @csrf
            <div class="form-row">
                <div class="">
                    <input class="col-8" type="text" name="nome" placeholder="Nome Completo">
                    <input class="col-2" type="text" name="idade" placeholder="idade">
                    <h4>Seleciona a empresa:</h4>
                    <select name="empresa" id="empresa">
                        <option value="0">Selecione</option>
                        @foreach ($empresas as $empresa)
                            <option  value="{{$empresa->id}}">{{$empresa->nome}}</option>
                        @endforeach
                    </select>
                    <h4>Endereco :</h4>
                    <div class="form-group">
                        <input type="text" name="rua" id="rua" placeholder="rua">
                        <input type="text" name="numero" id="numero" placeholder="numero">
                        <input type="text" name="cidade" id="cidade" placeholder="cidade">
                        <h4>estado :</h4>
                        <select  name="estado" id="estado">
                            <option value="0">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AM">Amazonas</option>
                            <option value="RR">Roraima</option>
                            <option value="PA">Pará</option>
                            <option value="AP">Amapá</option>
                            <option value="TO">Tocantins</option>
                            <option value="MA">Maranhão</option>
                            <option value="PI">Piauí</option>
                            <option value="CE">Ceará</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="AL">Alagoas</option>
                            <option value="SE">Sergipe</option>
                            <option value="BA">Bahia</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP">São Paulo</option>
                            <option value="PR">Paraná</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="GO">Goiás</option>
                            <option value="DF">Distrito Federal</option>
                        </select>
                        <button class="margin" type="submit" class="btn btn-primary">Enviar</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>
        @include('flash::message')
    </div>
</div>

<style>
    /* .margin{
        margin-top: 100px;
    } */

</style>