@extends('layouts.app')

@section('content')
<div class="row">
<!-- Center col -->
    <div class="col-3"></div>
    <div class="col col-md-6 col-lg-6">
        <div class="card bg-primary">
            <div class="card-header text-white font-weight-bold">Companies 
          <a class="float-right btn btn-primary btn-sm" href="/companies/create">Create new Company</a></div>
            <div class="card-block">
                <ul class="list-group">
                    @foreach($companies as $company)
                        <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Center col -->
<div class="col-3"></div>

@endsection
