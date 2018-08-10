@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Makers BnB</div>
            @auth
            <div class="card-header">Book A Space</div>

                <div class="card-body">

                </div>
            @endauth
            </div>
        </div>
    </div>
</div>
@endsection
