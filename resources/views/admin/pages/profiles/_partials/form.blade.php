@include('admin.includes.alerts')
<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $profile->nome ?? old('nome') }}">
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $profile->email ?? old('email') }}">
</div>
<div class="form-group">
    <label>telefone:</label>
    <input type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{ $profile->telefone ?? old('telefone') }}">
</div>
<div class="form-group">
    <label>cep:</label>
    <input type="text" name="cep" class="form-control" placeholder="CEP" value="{{ $profile->cep ?? old('cep') }}">
</div>
<div class="form-group">
    <label>logradouro:</label>
    <input type="text" name="logradouro" class="form-control" placeholder="Logradouro" value="{{ $profile->logradouro ?? old('logradouro') }}">
</div>
<div class="form-group">
    <label>bairro:</label>
    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{ $profile->bairro ?? old('bairro') }}">
</div>
<div class="form-group">
    <label>cidade:</label>
    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{ $profile->cidade ?? old('cidade') }}">
</div>
<div class="form-group">
    <label>estado:</label>
    <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{ $profile->estado ?? old('estado') }}">
</div>