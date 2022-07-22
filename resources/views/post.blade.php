@extends('layouts.app');
@section('title,post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('traitement') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Entrer votre titre</label>
                    <input type="text " class="form-control" name="name" id="name">
                    @error('name')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                    <label for="image">Entrer une image</label>
                    <input type="file" class="form-control" name="image" id="image"> <br>
                    @error('image')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                    <label >Entrer votre categorie</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                    <label for="content">Entrer votre contenu</label>
                    <textarea rows="6" class="form-control" name="content" id="content"></textarea>
                    @error('content')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <br>
                <button class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
</div>
@endsection
