@extends('templates/master')

@section('content')

Ðây là trang contact
<a href="./aboutme">aboutme</a>

{{$data['name'] or "hihihi"}}
{{date("d-m-Y")}}
@{{'<title>hihi</title>'}}

<br />
@if(isset($data['name']))
    {{$data['name']}}
@else
    'hihihi'
@endif

@for($i=0;$i<11;$i++)
    'hihihi'
@endfor

@stop