@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link-instalara" href="{{ url('profile/'.$photo->user->nickname) }}"> <i class="fa fa-arrow-circle-left"></i> {{ $photo->user->nickname }}</a></li>
          </ol>
           <img class="card-img-top" src="{{ asset($photo->url) }}" alt="{{ $photo->description }}">
           <div class="card-body bg-white">
                <p class="lead"> {{ $photo->description }} </p>
                <?php 
                    \Carbon\Carbon::setLocale(config('app.locale'));
                    $hoy = \Carbon\Carbon::now();
                    $fc = \Carbon\Carbon::parse($photo->created_at);
                ?>
                <small class="text-muted"> {{ $fc->diffForHumans($hoy) }} </small>
            </div>
            <br>
            <strong class="text-muted"> 
                <i class="fa fa-comment"></i> 
                {{ count($comments) }} Comentarios: 
            </strong>
            @foreach ($comments as $cm)
                <div class="container mb-2">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset($cm->user->photo) }}" width="40px">
                        </div>
                        <div class="col-md-11">
                            <p class="text-left mt-2">
                                <a class="btn-link-instalara" href="{{ url('profile/'.$cm->user->nickname) }}"> {{ $cm->user->nickname }} </a> {{ $cm->message }} 
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
            <form action="{{ url('comment/add') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                <div class="form-group">
                    <textarea class="form-control" name="message" cols="30" rows="3" placeholder="Comentario" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-instalara">
                        <i class="fa fa-comment"></i> 
                        Comentar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection