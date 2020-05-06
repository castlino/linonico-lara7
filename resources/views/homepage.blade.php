@extends('layouts.app')

@section('content')
<div class="homepage container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-body">                  
                      <p>Hi and welcome to my linonico site! Feel free to browse around the site.</p>
                      <p>
                        The site is just about my previous notes about my work that I decided should be public to anyone who might find it usefull.
                      </p>
                      <p>
                        <a href="{{ route('note.index') }}">Go to all notes...</a>
                      </p>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
