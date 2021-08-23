@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>peso:</label>
    <input type="text" name="peso" class="form-control" placeholder="peso" value="{{$patient->peso ?? old('peso')}}">
</div>
<div class="form-group">
    <label>altura:</label>
    <input type="text" name="altura" class="form-control" placeholder="altura" value="{{$patient->altura ?? old('altura')}}">
</div>
<div class="form-group">
    <label>tiposanguineo:</label>
    <input type="text" name="tiposanguineo" class="form-control" placeholder="tiposanguineo" value="{{$patient->tiposanguineo ?? old('tiposanguineo')}}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Salvar</button>
</div>