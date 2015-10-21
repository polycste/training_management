@extends('master/master')
@section('content')<br>
<div class="container col-md-8 col-md-offset-2">
    <h1 style="text-align: center;">SCHEDULES OF BARD</h1>
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @foreach($calenders as $calender)
        <div class="well well bs-component">
            <h2 style="text-align: center;">{{$calender->title}}</h2>

            <p>{{$calender->description}}</p>
            <img src="{{$calender->img}}" class="thumb img-responsive" alt="{{$calender->title}}"><br>
            <a href="calendar/{{$calender->id}}/edit" class="btn btn-success" type="button">
                <i class="fa fa-edit"> Edit</i>
            </a>
        </div>

    @endforeach
</div>
@endsection