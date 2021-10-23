@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6" offset-sm-3">
        
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::label('name',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('emali','Email') !!}
                    {!! Form::label('name',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation','Confirmation') !!}
                    {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up' , ['class' => 'btn btn-primary btn-block'}) !!}
            {!! Form::close() !!}
        </div>     
    </div>
@endsection