@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="level">
                            <span class="flex">
                                <a>{{$website->owner->name}} created :
                                    <h4>{{$website->name}}</h4>
                                    {{ $website->created_at->diffForHumans() }}
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="body">
                            {{$website->url}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
