@extends('main')

@section('title','| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {{--{!! Html::style('css/select2.min.css') !!}--}}
    {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
    {{--<script>--}}
        {{--tinymce.init({--}}
            {{--selector:'textarea'--}}
        {{--});--}}
    {{--</script>--}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2"></div>
        <h1>Create New Post</h1>
        <hr>
        {!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'', 'files'=> true)) !!}
            {{ Form::label('title','Title:') }}
            {{ Form::text('title',null,array('class' => 'form-control','required'=>'','maxlength'=>'255')) }}

            {{ Form::label('slug','Slug:')}}
            {{ Form::text('slug',null,array('class' => 'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

            {{ Form::label('category_id','Category:')}}
            <select class="form-control" name="category_id">
               @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                @endforeach
            </select>

            {{ Form::label('featured_image','Upload Featured Image:') }}
            {{ Form::file('featured_image') }}

            {{ Form::label('body','Post body:') }}
            {{ Form::textarea('body',null,array('class' => 'form-control','required'=>'')) }}

            {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;') )}}
        {!! Form::close() !!}
    </div>

@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}

@endsection
