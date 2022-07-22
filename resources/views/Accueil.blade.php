@extends('layouts.app');
@section('title,Accueil')
@section('content')
<div class="row mt-5">
    <form method="post" action="{{ route('validation') }}">
        @csrf

        <div class="form-group mb-3">
            <input class="form-control w-25" type="text" name="name" id="">
            @error('name')
                <strong class="text-danger">{{ $message}}</strong>
            @enderror
        </div>

        <button class="btn btn-primary">Valider</button>
    </form>
</div>
@endsection
