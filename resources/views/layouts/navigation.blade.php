<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Travelpage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Participate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/impressum') }}">Impressum</a>
                </li>
            </ul>
            @if(\Illuminate\Support\Facades\URL::current() != \Illuminate\Support\Facades\URL::to("/"))
                <x-destination-search></x-destination-search>
            @endif
        </div>
    </div>
</nav>
