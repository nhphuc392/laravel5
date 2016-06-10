<h1>Sua bai viet {!! $articles->id !!}</h1>
	{!! Form::model($articles,['method'=>'PATCH','action'=>['ArticlesController@update',$articles->id]]) !!}
        {!! Form::label('hihi','Name:') !!}
		{!! Form::text('hihi') !!} <br />
 

 
		{!! Form::submit('Cap nhat')!!}
 
	{!! Form::close() !!}
@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif 