@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>Especialidade:</label>
    <input type="text" name="especialidade" class="form-control" placeholder="especialidade" value="{{$doctor->especialidade ?? old('especialidade')}}">
</div>
<div class="form-group">
    <label>CRM:</label>
    <input type="text" name="crm" class="form-control" placeholder="crm" value="{{$doctors->crm ?? old('crm')}}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>