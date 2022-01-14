@extends('layouts.plantilla')

@section('title', 'Cursos' . $curso)

@section('content')
<h1>Bienvenio al curso: {{$curso}}</h1>  <!-- <h1>Bienvenio al curso: <?php echo $curso ?></h1> -->
@endsection

