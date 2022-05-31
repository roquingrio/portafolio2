@extends('layouts.app')
@section('content')
<div class="container"> 


    @if(Session::has('mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('mensaje')}}
                <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif

    




    @can('editaproyecto')
    <a href="{{ url('proyecto/create') }}" class="btn btn-success"> Registrar nuevo proyecto</a>
    @endcan

   

<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $proyecto)
        <tr>
            <td>{{$proyecto->id}}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage'). '/'.$proyecto->Foto }}" width="100" alt="">
                
            </td>

            <td>{{$proyecto->Nombre}}</td>
            <td>{{$proyecto->Descripcion}}</td>
            <td>
                <a href="{{ url('/proyecto/'.$proyecto->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>
                @can('editaproyecto')
            | 
                
                <form action="{{url('/proyecto/'.$proyecto->id)}}" class="d-inline" method="post">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger"type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form> 
                @endcan
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!! $proyectos->links()!!}

</div>
@endsection