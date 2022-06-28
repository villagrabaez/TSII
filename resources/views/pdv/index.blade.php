@extends('layouts.app')

@section('content')
  <div class="row mt-5">
    <div class="col-sm-12 col-md-8">
      @include('pdv.partials.details')
    </div>

    <div class="col-sm-12 col-md-4">
      @include('pdv.partials.customer')

      @include('pdv.partials.total')
    </div>
  </div>
@endsection