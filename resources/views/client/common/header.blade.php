<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="./assets/images/logo.svg" alt="" class="logo">
            <span>BMI</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">BMI result means</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Steps to BMI</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Limitations of BMI</a>
                </li>


                <li class="nav-item dropdown text-decoration-none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </li>


            </ul>

            <div class="d-none d-lg-block">
                <a class="btn btn-light rounded-pill py-3" href="{{ route('calculator') }}">Calculate BMI</a>
            </div>
        </div>
    </div>
</nav>
