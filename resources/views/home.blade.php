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
                    <form method="POST" action="{{ route('filterByDay') }}">
                        <input name="dateDayFilter" type="date" placeholder="filtar por día">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary" id="filterByDay">filtar por día</button>
                    </form>
                    <br>
                    <table class="table table-dark" border="1">
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>telefono</th>
                        <th>día</th>
                        <th>hora</th>
                        <th>barbero</th>
                    </tr>
                    @foreach($citas as $cita)
                    <tr>
                        <td>{{ $cita->id }}</td>
                        <td>{{ $cita->userName }}</td>
                        <td>{{ $cita->userPhone }}</td>
                        <td>{{ $cita->day }}</td>
                        <td>{{ $cita->time }}</td>
                        <td>{{ $cita->barber }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
