@extends('default')

@section('page-template')

    <article id="post">
        <div class="cover-wrapper">
            <img class="cover" src="{{$post->getCoverImage()->getFile()->getUrl()}}">
            <div class="cover--overlay"></div>
            <div class="cover--title">
                <h1>{{$post->getTitle()}}</h1>
                <h2>By Stanley Clark</h2>
            </div>
        </div>
        <a class="button" href="{{route('blog')}}"><span class="lnr lnr-arrow-left"></span>Back</a>

        <div class="post-content grid-container">

            <div>
                {{\Illuminate\Mail\Markdown::parse($post->getContent())}}
            </div>
        </div>
    </article>
@endsection