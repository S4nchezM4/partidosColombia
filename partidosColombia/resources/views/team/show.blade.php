@extends('layouts.app')

@section('template_title')
    {{ $team->name ?? "{{ __('Show') Team" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Team</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teams.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Team Name:</strong>
                            {{ $team->team_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
