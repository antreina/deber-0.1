@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cobre</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ $cobre }}
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Plastico</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ $plastico }}
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cable</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ $cable }}
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
