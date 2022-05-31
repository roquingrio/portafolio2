<h1>{{ $modo }} Proyecto</h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
           <li> {{ $error }} </li> 
        @endforeach
    </ul>
</div>
    
@endif

<div class="form-group">
    <label for="Foto"></label>
        @if(isset($proyecto->Foto))
            <img class="img-thumbnail img-fluid" src="{{ asset('storage'). '/'.$proyecto->Foto }}" width="100" alt="">
        @endif
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
    <br>
</div>

<div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input class="form-control"type="text" name="Nombre" value="{{ isset($proyecto->Nombre)?$proyecto->Nombre:old('Nombre') }}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="Descripcion"> Descripcion </label>
    <input class="form-control" type="text" name="Descripcion" value="{{ isset($proyecto->Descripcion)?$proyecto->Descripcion:old('Descripcion')}}" id="Descripcion">
    <br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary" href="{{ url('proyecto/') }}"> Regresar</a>
