@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-2 pull-left">
                            <strong>Your Token :</strong>
                        </div>
                        <div class="col-md-10 pull-right" style="overflow-x: scroll;">
                        {{$tokens->token}}
                        </div>
                    </div> 
                    @if(auth()->user()->apps)
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Purpose</th>
                                <th>Method</th>
                                <th>Url</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><strong>Get Transaction</strong></td>
                                <td>GET</td>
                                <td>//host/transaction?token=[yourtoken]</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>Store Transaction</strong></td>
                                <td>POST</td>
                                <td>//host/transaction?token=[yourtoken]</td>
                            </tr>
                        </table>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <div class="col-md-2 pull-right">
                            <a href="{{url('apps/create')}}" class="btn btn-primary" style="margin-top:10px;">
                                <span class="fa fa-pencil"></span>Create
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
