<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('game_date') }}
            {{ Form::text('game_date', $game->game_date, ['class' => 'form-control' . ($errors->has('game_date') ? ' is-invalid' : ''), 'placeholder' => 'Game Date']) }}
            {!! $errors->first('game_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_1') }}
            {{ Form::text('team_1', $game->team_1, ['class' => 'form-control' . ($errors->has('team_1') ? ' is-invalid' : ''), 'placeholder' => 'Team 1']) }}
            {!! $errors->first('team_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_2') }}
            {{ Form::text('team_2', $game->team_2, ['class' => 'form-control' . ($errors->has('team_2') ? ' is-invalid' : ''), 'placeholder' => 'Team 2']) }}
            {!! $errors->first('team_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_type') }}
            {{ Form::text('team_type', $game->team_type, ['class' => 'form-control' . ($errors->has('team_type') ? ' is-invalid' : ''), 'placeholder' => 'Team Type']) }}
            {!! $errors->first('team_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $game->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>