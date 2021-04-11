@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex">
                <h1>@lang('Create Contact Details') <small class="text-muted">{{ $prospect->name }}</small></h1>
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('Actions')
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('admin.prospects.dashboard')}}">@lang('View Prospect')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection