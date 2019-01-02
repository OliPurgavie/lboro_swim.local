@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Coach Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($group_list as $swimmer)
                      <p>{{ $swimmer->id }} - {{ $swimmer->name }} <a href="{{ route('coach.profiles', ['swimmer' => $swimmer->id]) }}">View Profile</a> </p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
