<div class="card mt-3">
    <div class="card card-body">
        <div class="row">
            <div class="col-sm-3">
                @if ($prospect->profile_image)
                    <img class=" " src="{{ Storage::url($prospect->profile_image) }}" alt="">
                @endif
            </div>
            <div class="col-sm-6">
                <h5>{{ $prospect->name }}</h5>
                <ul>
                    <li>
                        <strong>@lang('Email'): </strong>{{ $prospect->email }}
                    </li>
                    <li>
                        <strong>@lang('Date Added') :</strong>{{ $prospect->created_time }}
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="dropdown">
                    <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      @lang('Actions')
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{route('admin.prospects.edit' , ['prospect' => $prospect] ) }}">@lang('Edit')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>