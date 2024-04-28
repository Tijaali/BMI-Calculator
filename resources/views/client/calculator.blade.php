
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">

    <title>Body Mass Index Calculator</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/templatemo-topic-listing.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/style/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body id="top">

    <section class="hero">
        <!--Left container-->
        <div class="side-container">
            <div class="side-elements">
                <img src="./assets/images/logo.svg" alt="" class="logo">
                <div class="side-elements-text">
                    <h1>Body Mass <br>Index Calculator</h1>
                    <p>Better understand your weight in relation to your height using our
                        body mass index (BM) calculator. While BMI is not the sole determinant
                        of a healthy weight, it offers a valuable starting point to evaluate
                        your overall health and well-being.</p>
                </div>
            </div>
        </div>
    
        <!--BMI calculation card-->
        <div class="bmi-card pb-5">
            <p class="heading-m title">Enter your details below</p>
    
    
            <form class="d-flex flex-column text-center" method="POST" action="{{route('calculator.store')}}">
                @csrf
                <div class="size-input">
                    <label for="height" class="body-s">Height</label>
                    <label data-domain="cm" class="attach">
                        <input type="" class="input-field" name="height" id="cm" placeholder="0" step="0.01">
                    </label>
                </div>
                <div class="size-input">
                    <label for="weight" class="body-s">Weight</label>
                    <label data-domain="kg" class="attach">
                        <input type="number" class="input-field" name="weight" id="kg" placeholder="0" step="0.01">
                    </label>
                </div>
                <div class="custom-form">
                    <button type="submit" class="py-3 px-5">Submit</button>
                </div>
            </form>
    
    
    
        </div>
    </section>
    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
    <!-- <script type="module" src="./js/main.js"></script> -->
</body>

</html>
