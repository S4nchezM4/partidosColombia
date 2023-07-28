<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('team_name') }}
            {{ Form::text('team_name', $team->team_name, ['class' => 'form-control' . ($errors->has('team_name') ? ' is-invalid' : ''), 'placeholder' => 'Team Name']) }}
            {!! $errors->first('team_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>