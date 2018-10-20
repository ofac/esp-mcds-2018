@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="{{ url('add') }}" class="btn btn-instalara">
                <i class="fa fa-upload"></i> 
                Subir Foto 
            </a>
            <br><br>
            <div class="row justify-content-center">
            @forelse($photos as $photo)
                <div class="card col-3 m-1">
                  <img class="card-img-top" src="{{ asset($photo->url) }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">{{ $photo->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            @empty
                <div class="alert alert-dark">Aun no ha publicado fotos!</div>
            @endforelse
            </div>

        </div>
    </div>
</div>
@endsection
