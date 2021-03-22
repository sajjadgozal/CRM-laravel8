@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

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

            @if ($prospects->count())
            {{ $prospects->links() }}
                @foreach ($prospects as $prospect)
                    @include('admin.prospects.partials.prospect-card' , ['prospect' => $prospect])
                @endforeach 
            @endif

            {{-- @if ($prospects->count())
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
                        @foreach ($prospects as $prospect)
                            <tr>
                                <td>{{ $prospect->name }}</td>
                                <td>{{ $prospect->email }}</td>
                                <td>{{ $prospect->created_time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            @endif --}}


        </div>
    </div>
</div>
@endsection
