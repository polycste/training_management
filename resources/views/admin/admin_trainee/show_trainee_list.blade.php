@extends('admin/layouts.master')
@section('title', 'All Trainee')
@section('content')
	
    <div class="container col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2> Trainees Information </h2>
                    </div>
                    @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                     @endforeach
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($trainees->isEmpty())
                        <p> There is no data in database.</p>
                    @else
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>                                    
                                    <th>Country</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trainees as $trainee)
                                    <tr>
                                        <td> {!! $trainee->id !!}  </td>
                                     	<td> <a href="{!! action('AdminController@trainee_view_course_id', $trainee->id) !!}">{!! $trainee->name !!}</td>
                                        
                                        <td>{!! $trainee->country !!}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
        </div>
@endsection

