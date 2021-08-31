@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome">
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
</div>
<div class="form-group">
    <label>Telefone:</label>
    <input type="number" name="telefone" class="form-control" placeholder="Telefone">
</div>
<div class="form-group">
    <label>CEP:</label>
    <input type="text" name="cep" class="form-control" placeholder="CEP" value="{{$enderecos->first()->cep ?? ''}}">
</div>
<div class="form-group">
    <label>Logradouro:</label>
    <input type="text" name="logradouro" class="form-control" placeholder="Logradouro" value="{{$enderecos->first()->logradouro ?? ''}}">
</div>
<div class="form-group">
    <label>Bairro:</label>
    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{$enderecos->first()->bairro ?? ''}}">
</div>
<div class="form-group">
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{$enderecos->first()->cidade ?? ''}}">
</div>
<div class="form-group">
    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{$enderecos->first()->estado ?? ''}}">
</div>
<div class="form-group">
    <label>Data Contrato:</label>
    <input type="date" name="datacontrato" class="form-control" placeholder="Data Contrato">
</div>
<div class="form-group">
    <label>Salario:</label>
    <input type="text" name="salario" class="form-control" placeholder="Salário">
</div>
<div class="form-group">
    <label>Senha:</label>
    <input type="password" name="senhahash" class="form-control" placeholder="Senha">
</div>
{{--se medico--}}
<div class="form-group">
    <input type="checkbox" name="c1" onclick="showMe('medico')"> Funcionáro é médico
</div>
<script>
    function showMe(box) {
        var chboxs = document.getElementsByName("c1");
        var vis = "none";
        for(var i=0;i<chboxs.length;i++) { 
            if(chboxs[i].checked){
             vis = "block";
                break;
            }
        }
        document.getElementById(box).style.display = vis;
    }
</script>
<div id="medico" style="display:none">
    <div class="form-group">
        <label>Especialidade:</label>
        <input type="text" name="especialidade" class="form-control" placeholder="Especialidade">
    </div>
    <div class="form-group">
        <label>CRM:</label>
        <input type="text" name="crm" class="form-control" placeholder="CRM">
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>