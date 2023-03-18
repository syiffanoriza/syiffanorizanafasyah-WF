<!DOCTYPE html>
<html lang="en">
<head>
    <title>NoruPad</title>

    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="icon" href="{{asset('/assets/img/icon.png')}}">
</head>
<body>
    <header>
        <nav>
            <div class="flex">
                <img src="{{asset('/assets/img/icon.png')}}" class="icon">
                <h1>NoruPad</h1>
            </div>

            <ul>
                <li><a href="{{url('/dashboard')}}" class="btn">Login</a></li>
                <li><a href="{{url('/dashboard')}}" class="btn">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="banner">
            <div>
                <h1>All of your notes, <br>Just <span class="hl">one click</span> away</h1>
                <br><p>Take notes without the hassle, available on the web</p>
                <br><br><a href="{{url('/dashboard')}}" class="btn">Register Now</a>
            </div>
            <img src="{{asset('/assets/img/icon.png')}}" class="icon">
        </div>
    </main>

    <footer>
        <p>A Note-taking web app concept by Noriza</p>
        <p>Icon design by Namira W.</p>
    </footer>
</body>
</html>