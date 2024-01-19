@extends('dashboard.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear post</h1>
    @include('dashboard.fragment._errors-form')

    <form action="{{route('post.store')}}" method="post">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="" id="">
       
        <label for="">Slug</label>
        <input type="text" name="" id="">
        <label for="">Categoria</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title =>$id)
                <option value=" {{$id}}">{{$title}}></option>
            @endforeach

        </select>

        <label for="">Posteado</label>
        <select name="posted" id="">
            <option value="not">No</option>
            <option value="yes">Si</option>

        </select>

        <label for="">Contenido</label>
        <textarea name="content"></textarea>
        
        <label for="">Descripcion</label>
        <textarea name="description"></textarea>
       
        <button type ="submit">Enviar</button>
    </form>
</body>
</html>
    
@endsection
