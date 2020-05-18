@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ $note->title }} 
                  @if (Auth::check())
                    {{-- LinoLara7, Hi {{ Auth::user()->name }} --}}
                    <a href='{{ route('note.edit', [$note]) }}' class="float-right">Edit<a>
                  @endif                    
                </div>
		{{--
                <div class="card-body">                  
                    This is note view area. {{ $slug }}
                </div>
		--}}
                <div class="card-body">                  
                    {!! $note->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
