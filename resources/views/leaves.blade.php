@extends('layouts.master')
@section('title','Event Create')
@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Leave List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Reason</th>
                        <th>Date</th>
                        <th>Half Day Or Full Day</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($leaves as $leave)
                      <tr>
                        <td>{{$leave->user_name}}</td>
                        <td>{{$leave->email}}</td>
                        <td>{{$leave->reason}}</td>
                        <td>{{$leave->date}}</td>
                        <td>{{$leave->half_full_day}}</td>
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