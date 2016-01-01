@extends('layouts.sidebar')
@section('content')

<h4 class="tm-article-subtitle">
<ul class="uk-breadcrumb">
    <li><a href="{{ URL::to('admin/positions') }}">ข้อมูลตำแหน่ง</a></li>   
    <li class="uk-active"><span>เพิ่มข้อมูลตำแหน่ง</span></li>
</ul>
</h4>	
	
{{ Form::open( array( 'url' => 'admin/positions/create', 'class' => 'uk-form uk-form-horizontal uk-width-medium-1-1' ) ) }}
<fieldset>
<div class="g-header-from uk-text-danger">เพิ่มข้อมูล</div>  
	{{ Form::token() }}		

    <div class="uk-form-row uk-width-1-1">
		{{ Form::label( 'positionName', 'ชื่อตำแหน่ง', array( 'class' => 'uk-form-label' ) ) }}
		<div class="uk-form-controls">
			{{ Form::text( 'positionName', Input::old('positionName'), array( 'placeholder' => 'ชื่อตำแหน่ง', 'class' => 'uk-width-1-1' ) ) }}
			@if ($errors->has('positionName')) <p class="g-text-error uk-text-danger">{{ $errors->first('positionName') }}</p> @endif
		</div>
	</div>
	<hr />
	<div class="uk-form-row uk-text-center">
		{{ Form::submit( 'บันทึก', array( 'class'=>'uk-button uk-button-primary' ) ) }}
		<a class="uk-button uk-button-success" href="{{ URL::to('admin/positions') }}">กลับหน้าหลัก</a>
	</div>

 	<hr />	 
    </fieldset>
  {{ Form::close() }}
	
@stop
