@extends('layouts/default')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12"></div>

    {{ Form::open(array('url' => 'users/sign_up', 'method' => 'post')) }}
          <fieldset>
        <legend>Sign up</legend>
        <div class="control-group">
          <?php echo Form::label('name', 'Name'); ?>
          <div class="controls">
            <?php echo Form::text('name'); ?>
          </div>
        </div>

        <div class="control-group">
          <?php echo Form::label('email', 'email'); ?>
          <div class="controls">
			  <?php echo Form::text('email'); ?>
          </div>
        </div>

        <div class="control-group">
          <?php echo Form::label('password', 'password'); ?>
         <div class="controls">
            <?php echo Form::password('password'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo Form::label('password_confirmation', 'password confirmation'); ?>
          <div class="controls">
            <?php echo Form::password('password_confirmation'); ?>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
             {{Form::submit("Sign in", array('class'=>"btn btn-primary"))}}

          </div>
        </div>
      </fieldset>
    {{ Form::close() }}
    </div>
  </div>
</div>
@stop