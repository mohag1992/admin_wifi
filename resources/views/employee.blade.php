@extends('layouts.master')
@section('title','Event Create')
@section('content')


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Event List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Attendance Percance</th>
                        <th>Leave Count</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$event->title}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->start_time}}</td>
                        <td><div class="btn btn-success" onclick="eventEdit({{$event->id}});">Edit</div></td>
                      </tr>
                    @endforeach
                      
                      
                     
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->



@endsection