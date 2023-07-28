<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('game_date') }}
            {{ Form::text('game_date', $game->game_date, ['class' => 'form-control' . ($errors->has('game_date') ? ' is-invalid' : ''), 'placeholder' => 'Game Date']) }}
            {!! $errors->first('game_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('local_team') }}
            {{ Form::select('local_team', $teams, $game->local_team, ['class' => 'form-control' . ($errors->has('local_team') ? ' is-invalid' : ''), 'placeholder' => 'Local Team']) }}
            {!! $errors->first('local_team', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('visiting_team') }}
            {{ Form::select('visiting_team', $teams, $game->visiting_team, ['class' => 'form-control' . ($errors->has('visiting_team') ? ' is-invalid' : ''), 'placeholder' => 'Visiting Team']) }}
            {!! $errors->first('visiting_team', '<div class="invalid-feedback">:message</div>') !!}
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