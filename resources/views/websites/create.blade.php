@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Website</div>
                    <div class="card-body">
                        <form method="POST" action="/api/websites">
                            @csrf
                            <div class="form-group">
                                <label for="title"></label>
                                <input type="text"
                                       class="form-control"
                                       id="name" name="name"
                                       placeholder="Name"
                                       value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="body"></label>
                                <textarea type="url" name="url"
                                          class="form-control" id="url"
                                          placeholder="URL"
                                          rows="2" required>{{old('url')}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
