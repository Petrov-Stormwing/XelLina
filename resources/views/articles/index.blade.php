@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse($articles as $article)
                <div id="content">
                    <div class="title">
                        <h2>
                            <a href="{{$article->path()}}">{{ $article->title }}</a>
                        </h2>
                        <span class="byline"> By Author Placeholder</span>
                    </div>
                    <p>
                        <img src="/images/banner.jpg" alt="" class="image image-full"/>
                    </p>

                    {{ $article->body }}

                </div>
            @empty
                <p>  No Relevant Articles Yet. </p>
            @endforelse
        </div>
    </div>
@endsection