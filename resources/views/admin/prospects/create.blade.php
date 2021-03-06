@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card m-3">
        <div class="card-body">
            <div class="d-flex">
                <h1>@lang('Create Prospect')</h1>
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('Actions')
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{route('admin.prospects.dashboard')}}">@lang('dashboard')</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr>

            @if ($errors->count())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>@lang($message)</li>    
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('admin.prospects.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form group">
                    <label for="">@lang('Name')</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form group">
                    <label for="">@lang('Email')</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form group">
                    <label for="">@lang('Profile Image')</label>
                    <input type="file" class="form-control" name="profile_image">
                </div>

                <button class="btn btn-primary ">@lang('Create')</button>
            </form>

        </div>
    </div>
</div>
    
@endsection