<div class="form-group">
  <label for="name">Nombre</label>
  <input value = "{{old('name')}}" type="text" name="name" id="name" class="form-control" placeholder="Nombre">
  @error('name')
  <small class="alter alert-danger">*{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  <label for="description">Descripción</label>
  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
</div>




