@extends('layouts.master')
@section('title','Event Create')
@section('content')


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Attendance List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Attendance Percance</th>
                        <th>Absent</th>
                        <th>Present</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                     @if($user->leave == 1)
                     <tr style="background: #ea6c59">
                     @else
                     <tr>
                     @endif
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->percetage}} %</td>
                        <td>{{$user->absent}}</td>
                        <td>{{$user->count}}</td>
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