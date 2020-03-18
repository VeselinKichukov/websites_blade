@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/websites" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search"
                                   placeholder="Search Website by name">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-outline-success">
                                  Search
                               </button>
                             </span>
                        </div>
                    </form>
                </div>
                <br>
                @forelse($websites as $website)
                    <div class="card">
                        <div class="card-header">
                            <div class="level">
                                <h4 class="flex">
                                    <a href="{{$website->path() }}">
                                        {{$website->name}}
                                    </a>
                                </h4>
                                <span>
                                    {{ $website->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            {{$website->url}}
                        </div>
                    </div>
                    <br>
                @empty
                    <p>There are no relevant results at this time.</p>
                @endforelse
                {{ $websites->links() }}
            </div>
        </div>
    </div>
@endsection
