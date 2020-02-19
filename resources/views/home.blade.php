{{-- confimrar con J si en esta vista se puede desplegar el perfil del usurio inmediatamente o es mejor hacer u redirect
     --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a name="" id="" class="btn btn-primary" href="#" role="button">
                        Profile
                        
                    </a>


                    <a name="" id="" class="btn btn-primary" href="#" role="button">
                        Ceate Date <i class="fa fa-database" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
