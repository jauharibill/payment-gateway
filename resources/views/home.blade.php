@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="col-md-2 pull-left">
                        <strong>Your Token :</strong>
                    </div>
                    <div class="col-md-10 pull-right" style="overflow-x: scroll;">
                    {{$tokens->token}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
