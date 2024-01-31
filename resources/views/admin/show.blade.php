@extends('layouts.admin')

@section('content')
<div class="container-sm d-flex">
 <div class="card" style="width: 18rem;">

    <img src="{{ $dashboardData->img }}" class="card-img-top" alt="{{ $dashboardData->title }}">

    <div class="card-body bg-dark text-light">
        <h5 class="card-title">name: {{ $dashboardData->title }} </h5>
        <p class="card-text">
            <p class="card-text">descr: {{ $dashboardData->description }}</p>
            <p>author: {{ $dashboardData->author }}</p>
        </p>
    </div>
  </div>
</div>
@endsection