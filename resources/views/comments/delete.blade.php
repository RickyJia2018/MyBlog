@extends('main')
@section('title','| Edit Comment')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>DELETE THIS COMMENT?</h1>

        <p>
            <strong>Name:</strong>{{$comment->name}}<br>
            <strong>Email:</strong>{{$comment->email}}<br>
            <strong>Comment:</strong>{{$comment->comment}}<br>
        </p>
        {!! Form::open (['route'=>['comments.destroy',$comment->id],'method'=>'DELETE']) !!}
        {{ Form::submit('DELETE',['class'=>'btn btn-lg btn-danger btn-block']) }}
        {{ Form::close() }}
    </div>
@endsection