{{--  <div class="form-row">
    <div class="form-group col-md-6">
      
    </div>
    <div class="form-group col-md-4">
       
    </div>
    <div class="form-group col-md-2">
        
    </div>
</div>  --}}
<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input value = "{{old('name')}}" type="text" class="form-control" name="name" id="name" aria-describedby="helpId">
            @error('name')
                <small class="alter alert-danger">*{{$message}}</small>
            @enderror
        </div>
        
    </div>
    <div class="form-group col-md-6">
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input value = "{{old('email')}}" type="text" class="form-control" name="email" id="email" aria-describedby="helpId">
            <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
            @error('email')
                <small class="alter alert-danger">*{{$message}}</small>
            @enderror
        </div>
        
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="dni">DNI</label>
            <input value = "{{old('dni')}}" type="number" class="form-control" name="dni" id="dni" aria-describedby="helpId">
            @error('dni')
                <small class="alter alert-danger">*{{$message}}</small>
            @enderror
        </div>
        
    </div>
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="ruc">RUC</label>
            <input value = "{{old('ruc')}}" type="number" class="form-control" name="ruc" id="ruc" aria-describedby="helpId">
            <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
            @error('ruc')
                <small class="alter alert-danger">*{{$message}}</small>
            @enderror
        </div>
        
    </div>
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="phone">Teléfono \ Celular</label>
            <input value = "{{old('phone')}}" type="number" class="form-control" name="phone" id="phone" aria-describedby="helpId">
            <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
            @error('phone')
                <small class="alter alert-danger">*{{$message}}</small>
            @enderror
        </div>
        
    </div>
</div>
<div class="form-group">
    <label for="address">Dirección</label>
    <input value = "{{old('address')}}" type="text" class="form-control" name="address" id="address" aria-describedby="helpId">
    <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
    @error('address')
        <small class="alter alert-danger">*{{$message}}</small>
    @enderror
</div>

