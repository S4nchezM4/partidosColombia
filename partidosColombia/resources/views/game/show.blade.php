@extends('layouts.app')

@section('template_title')
    {{ $game->name ?? "{{ __('Show') Game" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Game</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('games.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Game Date:</strong>
                            {{ $game->game_date }}
                        </div>
                        <div class="form-group">
                            <strong>Local Team:</strong>
                            {{ $game->local_team }}
                        </div>
                        <div class="form-group">
                            <strong>Visiting Team:</strong>
                            {{ $game->visiting_team }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $game->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
