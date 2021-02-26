@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <div class="text-center my-5">
                        <a href="{{ route('exportEmailAddressTable') }}" class="btn btn-primary">Export EmailAddress table</a>
                    </div>

                    <div class="text-center my-5">
                        <a href="{{ route('exportAccountTable') }}" class="btn btn-primary">Export Account table</a>
                    </div>

                    <div class="text-center my-5">
                        <a href="{{ route('exportAccountsContactsTable') }}" class="btn btn-primary">Export Accounts Contacts table</a>
                    </div>

                    <div class="text-center my-5">
                        <a href="{{ route('exportLeadTable') }}" class="btn btn-primary">Export Lead table</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
