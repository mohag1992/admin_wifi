@extends('layouts.master')
@section('title','Dashboard')
@section('content') 

<div id="content" class="content">

    <h1 style="margin-bottom: 47px">{{isset($event) ?  'Event Edit' : 'Event Entry' }}</h1>

    <div class="row" >
    	<div class="col-md-8 col-12 entry_form">
    @if(isset($event) && count($event)>0)
    <form action="/backend/event/update" method="POST">
    	
 
    @else
     <form action="/backend/event/store" method="POST">
    @endif
     
     	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="id" value="{{isset($event)? $event->id:''}}"/>

		    <div class="form-group row">
		      <label for="usr" class="col-sm-3">Title <span class="text-danger">*</span></label>
              <div class="col-sm-9">
		      <input type="text" class="form-control" id="usr" name="title" value="{{ isset($event)? $event->title:Request::old('name') }}">
		      <p class="text-danger" >{{$errors->first('name')}}</p>
              </div>
		    </div>

            

		    <div class="form-group row">
		      <label for="des"  class="col-sm-3">Description  <span class="text-danger">*</span></label>
              <div class="col-sm-9">
		      <textarea id="des" class="form-control" rows="5" cols="7" name="description">{{ isset($event)? $event->description:Request::old('description') }}</textarea>
		      <p class="text-danger">{{$errors->first('edu_description')}}</p>
                </div>
		    </div>

		   


            <div class="float-right mb-5">
		         <input type="button" value="Cancel" class="btn btn-success" onclick="cancel_setup('teams')">
		         <input type="submit" name="submit" value="{{isset($event)? 'UPDATE' : 'Create'}}" class="btn btn-primary">
            </div>
		 </form>
		</div>  

    </div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
        	$('#start_date').datetimepicker({
                    locale: 'en'
                });
        });
    </script>



@endsection