@extends('layouts.admin')

 @section('content')
 <div class="container-fluid mt-4">
 	<div class="row justify-content-center">
 		<div class="col-md-8">
 			<div class="card">
 				<div class="card-header">{{ __('Dashboard') }}</div>

 				<div class="card-body">
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
 <div class="container-sm">
     @foreach($artItems as $artItem)
    <div class="row">
        <h3><em>{{ $artItem->title }}</em></h3>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ $artItem->img }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p> {{ $artItem->description }}</p>
          <p> {{ $artItem->author }}</p>
        </div>
    </div>
    @endforeach
 </div>
 @endsection





{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
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
@endsection --}}
