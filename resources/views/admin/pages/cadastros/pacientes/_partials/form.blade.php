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
    <label>Peso:</label>
    <input type="float" name="peso" class="form-control" placeholder="Peso">
</div>
<div class="form-group">
    <label>Altura:</label>
    <input type="text" name="altura" class="form-control" placeholder="Altura">
</div>
<div class="form-group">
    <label>Tipo Sanguineo:</label>
    <select name="tiposanguineo" id="tiposanguineo">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
    </select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>