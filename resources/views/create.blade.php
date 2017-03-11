@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apps</div>

                <div class="panel-body">
                    <div class="col-md-12">
                    	<form class="form" action="{{url('apps')}}" method="post">
							
                    		{{csrf_field()}}
							<ul>
								@foreach($errors->all() as $key)
									<li>{{$key}}</li>
								@endforeach
							</ul>
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name Application" value="{{old('name')}}">
							</div>

							<div class="form-group">
								<textarea name="description" class="form-control" placeholder="Description">{{old('description')}}</textarea>
							</div>
							<input type="hidden" value="{{auth()->user()->id}}" name="user_id">

							<div class="form-group">
								<button class="btn btn-primary">Submit</button>	
							</div>
                    		
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
