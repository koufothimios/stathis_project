<nav class="navbar navbar-light bg-faded">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="images/logo/logo.jpg"></a>

        <!-- Links -->
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item">
                @if (strpos(Request::url(), 'gallery'))
                    <a class="nav-link active" href="/gallery">Photo Gallery</a>
                @else
                    <a class="nav-link" href="/gallery">Photo Gallery</a>
                @endif
            </li>
            <li class="nav-item">
                @if (strpos(Request::url(), 'vraveyseis'))
                    <a class="nav-link active" href="/vraveyseis">Βραβεύσεις</a>
                @else
                    <a class="nav-link" href="/vraveyseis">Βραβεύσεις</a>
                @endif
            </li>
            <li class="nav-item">
                @if (strpos(Request::url(), 'seminaria'))
                    <a class="nav-link active" href="/seminaria">Σεμινάρια</a>
                @else
                    <a class="nav-link" href="/seminaria">Σεμινάρια</a>
                @endif
            </li>
            <li class="nav-item">
                @if (strpos(Request::url(), 'epikoinwnia'))
                    <a class="nav-link active" href="/epikoinwnia">Επικοινωνία</a>
                @else
                    <a class="nav-link" href="/epikoinwnia">Επικοινωνία</a>
                @endif
            </li>
        </ul>
    </div>
</nav>
