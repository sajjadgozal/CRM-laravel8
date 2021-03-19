@extends('layouts.app')

@section('content')
<div class="container">


    <div class="card mt-3">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            
            <div class="d-flex">
                <h1>@lang('Prospects') <small>@lang('showing all prospects here.')</small></h1>
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          @lang('Actions')
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{route('admin.prospects.create')}}">@lang('create prospect')</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <hr>

            @if ($prospects->count())
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>@lang('Name')</th>
                            <th>@lang('Email')</th>
                            <th>@lang('Created At')</th>
                            <th>@lang('Actions')</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                
            @endif
        </div>
    </div>
</div>
@endsection
