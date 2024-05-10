@extends('client.common.layout')
@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto text-center">

                    <h1 class="text-white fw-bolder">{{ $bmi }}</h1>
                    @if ($bmi > 24.9)
                        <h6>
                            You're overweight
                        </h6>
                    @elseif ($bmi < 18.5)
                        You're underweight
                    @else
                        Congrates you're at healthy weight!
                    @endif


                    <div class="mt-4 pt-2 mb-lg-0 mb-5">
                        <a href="{{ route('calculator') }}"> <button type="submit" class="py-3 px-5">Calculate</button></a>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="container section-padding">
        <div class="container">

            <div class="col-12 text-center">
                <h2 class="mb-4">BMI Details</h1>
            </div>

        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Height(cm)</th>
                    <th scope="col">weight(kg)</th>
                    <th scope="col">BMI</th>
                    <th>Condition</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usersAndBmis as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->height }}</td>
                        <td>{{ $value->weight }}</td>
                        <td>{{ $value->bmi }}</td>
                        @if ($value->bmi > 24.9)
                        <td>
                            overweight
                        </td>
                    @elseif ($value->bmi < 18.5)
                    <td>
                        underweight
                    </td>
                    @else
                        <td>
                            healthy weight
                        </td>
                    @endif
                    </tr>
                @endforeach
    
    
            </tbody>
        </table>


    </section>

    <section class="explore-section " >
        <div class="container">

            <div class="col-12 text-center">
                <h2 class="mb-4">Deit & Excerise</h1>
            </div>

        </div>
    

        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                            data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane"
                            aria-selected="true">Deit</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                            data-bs-target="#marketing-tab-pane" type="button" role="tab"
                            aria-controls="marketing-tab-pane" aria-selected="false">Excersie</button>
                    </li>

                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                            aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                @if ($bmi > 24.9)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Breakfast</h5>

                                                        <p class="mb-0">Scrambled egg whites with veggies
                                                            Whole grain toast
                                                            Fruit or green tea

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">1</span>
                                                </div>

                                                <img src="{{ asset('assets/images/over_break.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Snacks</h5>

                                                        <p class="mb-0">Greek yogurt with nuts or fruit
                                                            Veggies with hummus or cheese
                                                            Protein smoothie or cottage cheese

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                                                </div>

                                                <img src="{{ asset('assets/images/snacks.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lunch</h5>

                                                        <p class="mb-0">Baked fish with veggies
                                                            Quinoa or brown rice


                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                                                </div>

                                                <img src="{{ asset('assets/images/lunch.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mt-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Dinner</h5>

                                                        <p class="mb-0">Baked fish with roasted vegetables
                                                            Sweet potato or whole wheat pasta
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                </div>

                                                <img src="{{ asset('assets/images/dinner.png') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @elseif ($bmi < 18.5)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Breakfast</h5>

                                                        <p class="mb-0">Avocado toast with boiled eggs
                                                            Greek yogurt with honey and berries

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">1</span>
                                                </div>

                                                <img src="{{ asset('assets/images/under_break.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lunch</h5>

                                                        <p class="mb-0">Mixed nuts and dried fruits
                                                            Banana with peanut butter

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                                                </div>

                                                <img src="{{ asset('assets/images/under_lunch.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Dinner</h5>

                                                        <p class="mb-0">Chicken or tofu wrap with hummus and veggies
                                                            Lentil soup with whole grain bread

                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                                                </div>

                                                <img src="{{ asset('assets/images/under_dinner.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Breakfast</h5>

                                                        <p class="mb-0">Scrambled eggs with veggies
                                                            Whole grain toast with avocado
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">1</span>
                                                </div>

                                                <img src="{{ asset('assets/images/avocado-toast_with_scrambled_eggs_960-2.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lunch</h5>

                                                        <p class="mb-0">Grilled chicken or tofu salad
                                                            Quinoa or brown rice
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">2</span>
                                                </div>

                                                <img src="{{ asset('assets/images/healthy_lunch.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Dinner</h5>

                                                        <p class="mb-0">Baked fish with roasted vegetables
                                                            Sweet potato or whole wheat pasta
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                </div>

                                                <img src="{{ asset('assets/images/healthy_dinner.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                            aria-labelledby="marketing-tab" tabindex="0">
                            <div class="row">
                                @if ($bmi > 24.9)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Walking</h5>

                                                        <p class="mb-0">Start with brisk walking for 30 minutes most days
                                                            of the week. Gradually increase intensity and duration as
                                                            fitness improves.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">1</span>
                                                </div>

                                                <img src="{{ asset('assets/images/walking.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Swimming</h5>

                                                        <p class="mb-0">Low-impact and great for full-body workout. Aim
                                                            for 30 minutes of swimming laps or water aerobics sessions.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Swimming.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Cycling</h5>

                                                        <p class="mb-0">Either outdoors or on a stationary bike. Begin
                                                            with shorter rides and gradually increase duration and
                                                            intensity.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Cycling.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @elseif ($bmi < 18.5)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Bodyweight Squats</h5>

                                                        <p class="mb-0">Stand with feet shoulder-width apart, lower your
                                                            body as if sitting back into a chair, then rise back up. Works
                                                            leg muscles.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Bodyweight Squats.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Push-Ups</h5>

                                                        <p class="mb-0">Start in a plank position, lower your body until
                                                            your chest nearly touches the floor, then push back up. Builds
                                                            chest, shoulder, and arm strength.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Push-Ups.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Dumbbell Rows</h5>

                                                        <p class="mb-0">With a dumbbell in each hand, bend forward at the
                                                            waist with knees slightly bent. Pull the weights up to your
                                                            sides, squeezing your shoulder blades together. Strengthens back
                                                            muscles.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Dumbbell Rows.png') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lunges</h5>

                                                        <p class="mb-0">Step forward with one leg, lowering your hips
                                                            until both knees are bent at 90 degrees, then return to
                                                            standing. Targets leg muscles.</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Lunges.webp') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Aerobic Exercise</h5>

                                                        <p class="mb-0">Aim for 150 mins/week (e.g., brisk walking,
                                                            cycling).</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">1</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Aerobic Exercise.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Strength Training: </h5>

                                                        <p class="mb-0">Work major muscle groups 2x/week (e.g., squats,
                                                            push-ups).</p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Strength Training.jpg') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#" class="text-decoration-none">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Flexibility</h5>

                                                        <p class="mb-0">Regular stretching to improve range of motion.
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                </div>

                                                <img src="{{ asset('assets/images/Flexibility.webp') }}"
                                                    class="custom-block-image img-fluid" alt=""
                                                    style="height: 300px">
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </section>
   
    
@endsection
