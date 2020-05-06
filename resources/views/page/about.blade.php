@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">         
                  
                  <div class="row">        
                    <div class="col-md-2 mb-4"> 
                      <img src="{{ asset('img/lino-toonsquare.png') }}" style="width: 100%; max-width: 100px;"/>
                    </div>
                    <div class="col-md-10"> 
                      {{ $aboutContent }}
                    </div>
                  </div>
                  
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
