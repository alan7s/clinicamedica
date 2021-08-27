@include('admin.includes.alerts')
<div class="form-group">
    <label>CEP:</label>
    <input type="text" name="cep" class="form-control" placeholder="CEP" value="{{ $endereco->cep ?? old('cep') }}">
</div>
<div class="form-group">
    <label>Logradouro:</label>
    <input type="text" name="logradouro" class="form-control" placeholder="Logradouro" value="{{ $endereco->logradouro ?? old('logradouro') }}">
</div>
<div class="form-group">
    <label>Bairro:</label>
    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{ $endereco->bairro ?? old('bairro') }}">
</div>
<div class="form-group">
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{ $endereco->cidade ?? old('cidade') }}">
</div>
<div class="form-group">
    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{ $endereco->estado ?? old('estado') }}">
</div>