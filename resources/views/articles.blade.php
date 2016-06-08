<html>
<head>
	<title>View articles</title>
</head>
<body>
	<ul>
	@foreach($articles as $article)
		<li>Name : {{$article->hihi}} | Author : {{$article->hihi}} | Create : {{$article->created_at}} | Update : {{$article->updated_at}}</li>
	@endforeach
	</ul>
</body>
</html>