<html>
    <head>
        <title>Register user</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

    </head>
    <body>
        <h1>Register new user</h1>
        <form method="POST" action={{url('/auth/register')}}>
            {!! csrf_field() !!}
            @if(count($errors)>0)
                <div>
                    Error:<br />
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="input name here!" />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="input email here!" />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="input password here!" />
            </div>
            <div>
                <label for="pass_confirmation">Confirm password:</label>
                <input type="password" name="pass_confirmation" id="pass_confirmation" placeholder="input password here!" />
            </div>
            <div>
                <button type="summit">Summit</button>
            </div>
        </form>
    </body>
</html>