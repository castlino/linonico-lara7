@extends('layouts.app')
@inject('str', 'Illuminate\Support\Str')
@inject('linoHelper', 'App\Helpers\LinoHelper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach ($notes as $note)
          <div class="col-sm-3">
              <div class="card">
                  <div class="card-header"><a href="{{ route('note.view', $note->slug) }}">{{ $note->title }}</a></div>

                  <div class="card-body">                  
                      {{ $str->words($linoHelper->stripHtmls($note->body), 20) }}
                  </div>
              </div>
          </div>
      @endforeach
        
    </div>
</div>
@endsection
