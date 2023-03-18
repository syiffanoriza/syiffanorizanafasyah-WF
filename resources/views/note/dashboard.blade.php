<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dasboard</title>

    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="icon" href="{{asset('/assets/img/icon.png')}}">
</head>
<body>

    {{-- 
        
        DIDNT GET TO CODE LOGIC, SORRY :(

        --}}

    <header>
        <nav>
            <div class="flex">
                <img src="{{asset('/assets/img/icon.png')}}" class="icon">
                <h1>NoruPad</h1>
            </div>

            <ul>
                <li><a href="{{url('/')}}" class="btn">Log out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="padding">
            <div class="template-section">
                <h2>Templates <span class="fade">(coming soon)</span></h2>
                <div class="templates">
                    <div class="template-box"></div>
                    <div class="template-box"></div>
                    <div class="template-box"></div>
                    <div class="template-box"></div>
                </div>
            </div>

            <div class="dashboard">
                <div class="left">
                    <h1>Your Notes</h1>
                    <a class="btn2" onclick="makenote()">+ Create note</a>
                </div>
                <div class="right">
                    <div class="make-note" id="cform">
                        <form action="">
                            <div class="space">
                            <input type="text" name="title" class="title" placeholder="title" required>
                            <a class="btn" onclick="save()">save</a>

                            </div>
                            <textarea name="note" class="note-area" placeholder="Take a note here..." rows="10" required></textarea>
                        </form>
                    </div>
                    <div class="note" id="note">
                        <div>
                            <h2>test</h2>
                        </div>
                        <button type="submit" class="btn" onclick="view()">View</button>
                    </div>
                    <div class="view-note" id="rform">
                        <div class="space">
                        <h2>Title here</h2>
                        <a class="btn">Save</a>
                        </div>
                        <p>Text here, Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    let form1 = document.getElementById('cform');
    let note = document.getElementById('note');

    function makenote() {
        form1.style.display = "flex",
        note.style.display = "none"
    }

    function save() {
        form1.style.display = "none",
        note.style.display = "flex"
    }

    function view() {
        form1.style.display = "none",
        note.style.display = "none"
    }
</script>
</html>