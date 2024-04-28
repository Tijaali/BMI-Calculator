<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="./assets/images/logo.svg" alt="" class="logo">
            <span>BMI</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

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

                <li class="nav-item">
                    
                </li>


            </ul>

            <div class="d-none d-lg-block">
                <a class="btn btn-light rounded-pill py-3" href="{{route('calculator')}}">Calculate BMI</a>
            </div>
        </div>
    </div>
</nav>