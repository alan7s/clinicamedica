@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>Data:</label>
    <input type="date" name="data" class="form-control" placeholder="data" value="{{$agenda->data ?? old('data')}}">
</div>
<div class="form-group">
    <label>Horário:</label>
    <input type="time" name="horario" class="form-control" placeholder="horario" value="{{$agenda->horario ?? old('horario')}}">
</div>
<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="nome" class="form-control" placeholder="nome" value="{{$agenda->nome ?? old('nome')}}">
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="email" value="{{$agenda->email ?? old('email')}}">
</div>
<div class="form-group">
    <label>Telefone:</label>
    <input type="number" name="telefone" class="form-control" placeholder="telefone" value="{{$agenda->telefone ?? old('telefone')}}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>