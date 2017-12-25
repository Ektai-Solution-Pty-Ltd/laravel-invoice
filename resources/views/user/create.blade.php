@extends('layout.master')

@section('content')
	@include('layout.errorform')
	@include('layout.info')
	{!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal', 'id' => 'form']) !!}
<div class="panel panel-default">
<div class="panel-heading">Add User</div>
	<div class="panel-body">

		<div class="form-group {!! ( count($errors->get('name')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('nam', 'Name :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::input('text', 'name', @$value, ['class' => 'form-control put', 'placeholder' => 'Name', 'id' => 'nam']) !!}
			</div>
		</div>

		<div class="form-group {!! ( count($errors->get('name')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('usernam', 'Username :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('username', @$value, ['class' => 'form-control put', 'placeholder' => 'Username', 'id' => 'usernam']) !!}
			</div>
		</div>

		<div class="form-group {!! ( count($errors->get('email')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('email', 'Email :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::input('text', 'email', @$value, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
			</div>
		</div>
		
		<div class="form-group {!! ( count($errors->get('password')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('pass', 'Password :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::input('password', 'password', @$value, ['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'pass']) !!}
			</div>
		</div>
		
		<div class="form-group {!! ( count($errors->get('password_confirmation')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('us', 'Password :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::input('password', 'password_confirmation', @$value, ['class' => 'form-control', 'placeholder' => 'Password Confirmation', 'id' => 'us']) !!}
			</div>
		</div>
		
		<?php
		foreach ($gr as $key) {
			$lm[$key->id] = $key->group;
		}
		?>
		
		<div class="form-group {!! ( count($errors->get('id_group')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('ug', 'User Group :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::select('id_group', $lm, NULL,['class' => 'form-control', 'id' => 'ug', 'placeholder' => 'Choose User Group']) !!}
			</div>
		</div>
		
		
		<div class="form-group {!! ( count($errors->get('color')) ) >0 ? 'has-error' : '' !!}">
			{!! Form::label('rgba', 'Choose Your Color :', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('color', @$value, ['class' => 'form-control ', 'id' => 'rgba' ]) !!}
			</div>
		</div>
		
		
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{!! Form::submit('Save', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
			</div>
		</div>
			{!! Form::close() !!}</div>
</div>
</div>

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">Users List</div>
		<div class="panel-body">
			<div class="col-lg-12">
				<div class="row ">
					<div class="col-lg-10 table-responsive col-centered">
				
				<?php
				// dt-responsive nowrap
				?>
				
					@if( count($us) > 0 )
						<table id="example" class="table table-border table-hover ">
							<thead>
								<th>&nbsp;</th>
								<th>name</th>
								<th>username</th>
								<th>email</th>
								<th>group</th>
							</thead>
							<tbody>
								@foreach ($us as $k)
									<tr>
										<td>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li role="separator" class="divider"></li>
										<li><a href="{!! route('user.edit', $k->slug) !!}" >edit</a></li>
										<li>
											@if($k->id != 1)
											{!! Form::open(['route' => ['user.destroy', $k->slug], 'method' => 'delete']) !!}
											{!! Form::button('delete&nbsp;<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i>', ['class' => 'remove', 'type' => 'submit']) !!}
											{!! Form::close() !!}
											@endif
										</li>
										<li role="separator" class="divider"></li>
									</ul>
								</div>
										</td>
										<td>{!! $k->name !!}</td>
										<td>{!! $k->username !!}</td>
										<td>{!! $k->email !!}</td>
											<?php
											// refer to users model
											$use = \App\UserGroup::findOrFail($k->id_group);
											?>
										<td>{!! $use->group !!}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					@else
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('jquery')

$("#nam").keyup(function() {
	tch(this);
});

$("#usernam, #email").keyup(function() {
	lch(this);
});

$('#rgba').minicolors({
	format: 'rgb',
	opacity: true,
	theme: 'bootstrap',
});

////////////////////////////////////////////////////////////////////////////////////
// bootstrap validator
$("#form").bootstrapValidator({
	feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
		name: {
			validators: {
				notEmpty: {
					message: 'Please insert your name. '
				}
			}
		},
		email: {
			validators: {
				notEmpty: {
					message: 'Please insert your email. '
				},
				regexp: {
					regexp: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
					message: 'Please insert your valid email address. '
				},
			}
		},
		username: {
			message: 'The username is not valid',
			validators: {
				notEmpty: {
					message: 'The username is required and cannot be empty'
				},
				stringLength: {
					min: 6,
					max: 10,
					message: 'The username must be more than 6 and less than 10 characters long'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9_]+$/,
					message: 'The username can only consist of alphabetical, number and underscore'
				},
			}
		},
		password: {
			validators: {
				notEmpty: {
					message: 'Please insert your password. '
				},
				regexp: {
					regexp: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/,
					message: 'Passwords are 8-16 characters with uppercase letters, lowercase letters and at least one number. '
				},
			}
		},
		password_confirmation: {
			validators: {
				notEmpty: {
					message: 'Please insert your confirmation password. '
				},
				identical: {
					field: 'password',
					message: 'The password and its confirmation are not the same. '
				}
			}
		},
		id_group: {
			validators: {
				notEmpty: {
					message: 'Please choose an option. '
				}
			}
		},
		color: {
			validators: {
				notEmpty: {
					message: 'Please choose a color. '
				}
			}
		},
	}
})

////////////////////////////////////////////////////////////////////////////////////
@endsection