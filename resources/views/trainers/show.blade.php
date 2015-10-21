@extends('master_trainer/master')
@section('title', 'Trainer')
@section('content')
  <section class="content-2" style="background-color: rgb(255, 255, 255);">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="well">
                <h3>To Add New Exam <br><a href="{!! URL::to('/exam_create') !!}" class="btn btn-lg btn-success active">Click Here</a></h3>
            </div>
            <br>
            <div class="well">
                <h3>To View Marks Sheet<br><a href="{!! URL::to('/listOfstudentsAndMarks') !!}" class="btn btn-lg btn-info">Click Here</a></h3>
            </div>
          </div>
            <div class="col-md-6">
              <div class="well">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 style="overflow:hidden" class="panel-title"><span class="pull-left">{!! $trainer->name !!}</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                       <div class="col-md-3 col-lg-3 " align="center"><img src="{{ asset($trainer->filePath) }}"   class="img-circle img-responsive" /></div> 
  
                      <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                          <tbody>
                             <tr>
                              <td>Course:</td>
                              @foreach($courses as $course)
                                  <td>{!! $course->course_name !!}</td>
                              @endforeach
                              
                            </tr>
                            <tr>
                              <td>Country:</td>
                              <td>{!! $trainer->country !!}</td>
                            </tr>
                            <tr>
                              <td>Date of Birth</td>
                              <td>{!! $trainer->date_of_birth !!}</td>
                            </tr>
                         
                               <tr>
                                   <tr>
                              <td>Gender</td>
                              <td>Male</td>
                            </tr>
                              <tr>
                              <td>Education :</td>
                              <td>{!! $trainer->educational_qualification !!}</td>
                            </tr>
                            <tr>
                              <td>Email</td>
                              <td><a href="mailto:info@support.com">{!! $trainer->email !!}</a></td>
                            </tr>
                              <td>Phone Number</td>
                              <td>{!! $trainer->cell_number !!}
                              </td>   
                            </tr>   
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                      <span class="pull-right">
                         <a href="{!! action('TrainersController@edit', $trainer->id) !!}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                      </span>
                  </div>             
                </div>               
              </div>
            </div>
              <div class="col-md-3">
                  <div class="well">
                      <h3>To Update Trainee Info forms<a href="{!! URL::to('/trainees') !!}" class="btn btn-lg btn-info active">Click Here</a></h3>
                  </div>
                  <br>
                  <div class="well">
                      <h3>To View Trainee Attendance<br><a href="{!! URL::to('/attendance_show') !!}" class="btn btn-lg btn-success active">Click Here</a></h3>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
