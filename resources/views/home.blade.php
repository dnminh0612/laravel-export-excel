@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Export data') }}</div>

                    <div class="card-body">
                        @if(isset($tables))
                            <form action="{{ route('export') }}" method="POST">
                                @csrf
                                <div class="my-5">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <label for="tables">Select table</label>
                                            <select id="tables" name="table_name" class="custom-select">
                                                @foreach($tables as $key => $table)
                                                    <option value="{{ $table }}">{{ $table }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4 mt-3 mt-md-0 d-flex align-items-end">
                                            <button type="submit" class="btn btn-primary btn-block">Export</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif

{{--                        <div class="text-center my-5">--}}
{{--                            <a href="{{ route('exportEmailAddressTable') }}" class="btn btn-primary">Export EmailAddress--}}
{{--                                table</a>--}}
{{--                        </div>--}}

{{--                        <div class="text-center my-5">--}}
{{--                            <a href="{{ route('exportAccountTable') }}" class="btn btn-primary">Export Account table</a>--}}
{{--                        </div>--}}

{{--                        <div class="text-center my-5">--}}
{{--                            <a href="{{ route('exportAccountsContactsTable') }}" class="btn btn-primary">Export Accounts--}}
{{--                                Contacts table</a>--}}
{{--                        </div>--}}

{{--                        <div class="text-center my-5">--}}
{{--                            <a href="{{ route('exportLeadTable') }}" class="btn btn-primary">Export Lead table</a>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
