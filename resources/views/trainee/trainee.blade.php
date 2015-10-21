@extends('master.trainee_master')
@section('title','trainee')
@section('content')

    <section class="content-2" style="background-color: rgb(255, 255, 255);">

        <div class="container">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-md-3 col-lg-3">

                    <div class="well">
                        <h3>To Give FeedBack<br><a href="{!! URL::to('/feedbackCreate') !!}" class="btn btn-lg btn-info"
                                                   style="background-color:#5C6BC0">Click Here</a></h3>
                    </div>
                    <br>

                    <div class="well">
                        <h3>Health Details<a href="{!! URL::to('/UserHealthCreate') !!}" class="btn btn-lg btn-info"
                                             style="background-color:#FFC107">Fill The Form</a></h3>
                        <a href="{!! URL::to('/UserHealthInfos') !!}" class="btn btn-lg btn-info"
                           style="background-color:#F57F17">Edit The Form</a>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="well">
                        <div class="panel panel-info">
                            <div class="panel-heading">

                                <h3 class="panel-title">Trainee Name</h3>

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class=" col-md-12 col-lg-12 ">
                                        <table class="table table-user-information text-center">
                                            <tbody>
                                            <tr>
                                                <td>ID Code:</td>
                                                <td>18071</td>
                                            </tr>
                                            <tr>
                                                <td>Birth Place:</td>
                                                <td>Bangladesh</td>
                                            </tr>
                                            <tr>
                                                <td>Birth Date:</td>
                                                <td>06/23/2013</td>
                                            </tr>

                                            <tr>
                                                <td>Gender:</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Home Address:</td>
                                                <td>Comilla</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td><a href="">tahmi@yahoo.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number:</td>
                                                <td>01737-585474</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"
                                   style="background-color:#0097A7">Attendance</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <a href="{!! URL::to('/marksheetTrainee/'.Auth::user()->id.'/all') !!}"
                                   class="btn btn-lg btn-info" style="background-color:#1A237E">Exam Marks</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="well">
                        <h3>Registration
                            @if($regId==Auth::user()->id)
                                <a href="{!! URL::to('/registration/'.$regId.'/edit') !!}" class="btn btn-lg btn-info"
                                   style="background-color:#9C27B0">Edit The Form</a>
                            @else
                                <a href="{!! URL::to('/registration/create') !!}" class="btn btn-lg btn-info"
                                   style="background-color:#CE93D8">Fill The Form</a>

                            @endif

                        </h3>

                    </div>
                    <br>

                    <div class="well">
                        <h3>Information Sheet<a href="{!! URL::to('/trainee_create') !!}" class="btn btn-lg btn-info"
                                                style="background-color:#69F0AE">Fill The Form</a></h3>
                        <a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#00C853">Edit
                            The Form</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection