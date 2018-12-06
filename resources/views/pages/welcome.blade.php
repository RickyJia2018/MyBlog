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
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem distinctio earum exercitationem iure nulla officia praesentium qui quisquam, ullam, ut, velit vero. Adipisci deserunt omnis placeat porro quis voluptatibus.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem distinctio earum exercitationem iure nulla officia praesentium qui quisquam, ullam, ut, velit vero. Adipisci deserunt omnis placeat porro quis voluptatibus.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem distinctio earum exercitationem iure nulla officia praesentium qui quisquam, ullam, ut, velit vero. Adipisci deserunt omnis placeat porro quis voluptatibus.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem distinctio earum exercitationem iure nulla officia praesentium qui quisquam, ullam, ut, velit vero. Adipisci deserunt omnis placeat porro quis voluptatibus.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

        </div>
        <div class="col-md-3 col-md-offset-1" >
            <h2>Sidebar</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, deleniti, maxime! Eum facere odio rem tempore temporibus! Dignissimos esse et ipsam suscipit voluptas voluptatum? Cupiditate fuga libero quae reprehenderit saepe.
        </div>
    </div>


@endsection
