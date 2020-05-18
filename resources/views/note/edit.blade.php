@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Note</div>

                <div class="card-body">
                    
                  <form method="POST" action="/admin/note/update/{{ $note->slug }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title" value="{{ $note->title }}">
                        @error('title')
                          <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Body</label>
                        <textarea name="body" class="form-control @error('body') is-invalid @enderror"  rows="10" placeholder="">
                          {{ $note->body }}
                        </textarea>
                        @error('body')
                          <div class="invalid-feedback">{{ $errors->first('body') }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
