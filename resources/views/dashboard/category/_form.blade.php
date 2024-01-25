
<!DOCTYPE html>
<html lang="en">

<body>


    <form >
    @csrf

<label for="">Título</label>
<input type="text" class="form-control" name="title" value="{{ old('title', $category->title) }}">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{ old('slug', $category->slug) }}">



        <button class="mt-2 btn btn-success" type ="submit">Enviar</button>

    </form>


</body>
</html>
    
