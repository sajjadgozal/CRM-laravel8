@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card mt-3">
        
        <div class="card-header">
            
            {{ __('Edit Prospect') }} <small class="text-muted">{{ $prospect->name }}</small>

            <div class="d-flex">
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('Actions')
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('admin.prospects.dashboard')}}">@lang('Dashboard')</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.prospects.show' , ['prospect' => $prospect->id]) }}">@lang('View Prospect')</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="card body">


            <div class="row">
                <div class="col-sm-4">
                    {{-- Place holder for image and option for change image --}}
                    <div class="card mt-3">
                        <div class="card-body">

                            @if ($prospect->profile_image)
                                <img class="my-2" src="{{ Storage::url($prospect->profile_image) }}" alt="user profile image">
                            @else
                                <img class="my-2" src="/images/user.jpg" style="max=width: 100%" alt="blank user profile image">
                            @endif
                            
                            <div class="btn btn-outline-primary btn-sm btn-block">@lang('New Profile Image')</div>
                            <div class="btn btn-outline-danger btn-sm btn-block"><i class="fas fa-trash"></i>@lang('Delete Profile Image')</div>
        
                        </div>
                    </div>
                </div>
        
                <div class="col-8">
                    <div class="card mt-3">
                        <div class="card-body">
        
                            {{-- Update theyr name and email and profile image --}}
        
                            <h5>@lang('Edit personal details')</h5>
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
        
                            <form action="{{route('admin.prospects.update' , ['prospect' => $prospect])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form group">
                                    <label for="">@lang('Name')</label>
                                    <input type="text" class="form-control" name="name" value={{$prospect->name}}>
                                </div>
                                
                                <div class="form group">
                                    <label for="">@lang('Email')</label>
                                    <input type="email" class="form-control" name="email" value={{$prospect->email}}>
                                </div>
                                
                                <button class="btn btn-primary my-2">@lang('Edit')</button>

                            </form>
                        </div>
                    </div>
                </div>
        
            </div>


        </div>
    </div>





</div>
@endsection