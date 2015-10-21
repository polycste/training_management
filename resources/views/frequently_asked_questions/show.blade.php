@extends('admin.layouts.master')
@section('title', 'FAQs')
<style>
    label{
        color: #009688;
        font-size: larger;
    }
    hr{
        background-color: #E6EE9C;
    }
</style>
<script>
    function check(){
        return confirm("Are You Sure? You Want To Delete This Question.");
    }
</script>
@section('content')
    <div class="container col-md-12 col-md-offset-0">

        <div class="well well bs-component" style="background-color: #43A047; color:white; font-size:larger" align="center"><h1>Frequently Asked Questions</br>(FAQs)</h1></div>
            <div class="content">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if($FAQs->isEmpty())
                    <p>No Questions and Answer Retaled to this Training Name.</p>
                @else
                    @foreach($FAQs as $FAQ)
                        <div>
                            @foreach($trainings as $training)
                                @if($FAQ->training_id==$training->id)
                                    <h3 style="color:seagreen">Training Name :&nbsp; {!! $training->training_name !!}</h3>
                                @endif
                            @endforeach
                            <label>Question</label><hr>
                            <p>{!! $FAQ->question !!}</p>
                            <label>Answer</label><hr>
                            <p>{!! $FAQ->answer !!}</p>
                            <h6><i>Written By</i> &nbsp; &nbsp;{!! $FAQ->author_name !!}</h6>
                            <a href="{!! action('FAQsController@edit', $FAQ->id) !!}" class="btn btn-info pull-right">Edit</a>
                            <form method="post" action="{!! action('FAQsController@destroy', $FAQ->id) !!}" class="pull-right">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-warning" onclick="return check()">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div><br><br><br><br><br>
                    @endforeach
                @endif
                <div class="clearfix"></div>
            </div>


    </div>
@endsection