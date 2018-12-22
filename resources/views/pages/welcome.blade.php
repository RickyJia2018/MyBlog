@extends('main')
@section('title','| Homepage')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class="lead">This is my test website built with laravel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)

            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{substr($post->body,0,300) }}{{ strlen($post->body) > 300 ? '...' : "" }}</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1" >
            <h2>Sidebar</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, deleniti, maxime! Eum facere odio rem tempore temporibus! Dignissimos esse et ipsam suscipit voluptas voluptatum? Cupiditate fuga libero quae reprehenderit saepe.
        </div>
    </div>


@endsection
