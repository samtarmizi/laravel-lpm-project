@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Main') }}</div>

                <div class="card-body">
                    @can('isLP')
                        <a class="btn btn-primary">
                            Your are LP Admin
                        </a>
                    @endcan
                    @can('isPPD')
                        <a class="btn btn-warning">
                            Your are PPD Admin
                        </a>
                    @endcan
                    @can('isEjen')
                        <a class="btn btn-success">
                            Your are Ejen
                        </a>
                    @endcan
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
