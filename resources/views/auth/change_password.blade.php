@extends('layouts.app')

@section('content')
	<h3 class="page-title">@lang('تغير الباسورد')</h3>

	@if(session('success'))
		<!-- If password successfully show message -->
		<div class="row">
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		</div>
	@else
		{!! Form::open(['method' => 'PATCH', 'route' => ['auth.change_password']]) !!}
		<!-- If no success message in flash session show change password form  -->
		<div class="panel panel-default">
			<div class="panel-heading">
				@lang('تعديل')
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('current_password', trans('الباسورد الحالي'), ['class' => 'control-label']) !!}
						{!! Form::password('current_password', ['class' => 'form-control', 'placeholder' => '']) !!}
						<p class="help-block"></p>
						@if($errors->has('dsfsdf'))
							<p class="help-block">
								{{ $errors->first('sdfsd') }}
							</p>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('new_password', trans('باسورد جديد'), ['class' => 'control-label']) !!}
						{!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => '']) !!}
						<p class="help-block"></p>
						@if($errors->has('dsffsd'))
							<p class="help-block">
								{{ $errors->first('sdfsdfs') }}
							</p>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('new_password_confirmation', trans('تأكيد علي الباسورد'), ['class' => 'control-label']) !!}
						{!! Form::password('new_password_confirmation', ['class' => 'form-control', 'placeholder' => '']) !!}
						<p class="help-block"></p>
						@if($errors->has('dd'))
							<p class="help-block">
								{{ $errors->first('dd') }}
							</p>
						@endif
					</div>
				</div>
			</div>
		</div>

		{!! Form::submit(trans('حفظ'), ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
	@endif
@stop

