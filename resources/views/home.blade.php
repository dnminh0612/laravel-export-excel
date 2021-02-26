@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <div class="text-center">
                        <a href="{{ route('exportUsersTable') }}" class="btn btn-primary">Export User table</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
