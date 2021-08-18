@csrf
<div class="form-group">
    <label>Data Contrato:</label>
    <input type="text" name="datacontrato" class="form-control" placeholder="datacontrato" value="{{ $employee->datacontrato ?? old('datacontrato') }}">
</div>
<div class="form-group">
    <label>Salario:</label>
    <input type="text" name="salario" class="form-control" placeholder="salario" value="{{ $employee->salario ?? old('salario') }}">
</div>
<div class="form-group">
    <label>SenhaHash:</label>
    <input type="text" name="senhahash" class="form-control" placeholder="senhahash" value="{{ $employee->senhahash ?? old('senhahash') }}">
</div>