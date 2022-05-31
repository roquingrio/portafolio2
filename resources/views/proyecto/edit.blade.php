@extends('layouts.app')
@section('content')
<div class="container"> 

<form action="{{ url('/proyecto/'.$proyecto->id)}}" method="post" enctype="multipart/form-data" >
@csrf 
{{method_field('PATCH')}}

@include('proyecto.form',['modo'=>'Editar'])
</form>
</div>
@endsection
