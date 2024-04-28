@extends('client.common.layout')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 col-12 mx-auto text-center">
              <h1 class="text-white">Ready to Discover Your Health Potential?</h1>

              <h6>
                  "Unlock your health potential with our BMI Calculator. Gain insights, set goals, and embark
                  on your journey to a healthier, happier life. Let's make your wellness goals a reality!"
              </h6>
              <div class="mt-4 pt-2 mb-lg-0 mb-5">
                <a href="{{route('calculator')}}" > <button type="submit" class="py-3 px-5" >Calculate </button></a>
                 
              </div>

          </div>

      </div>
  </div>
</section>

<section class="featured-section" id="section_2">
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-lg-4 col-12 mb-4 mb-lg-0">
              <div class="custom-block bg-white shadow-lg">
                  <a href="topics-detail.html" class="text-decoration-none">
                      <div class="d-flex">
                          <div>
                              <h5 class="mb-2">Track Your Progress</h5>
                              <h6>"Monitor Your Health Journey"</h6>

                              <p class="mb-0">Track your wellness journey effortlessly. Monitor BMI, weight,
                                  and vital metrics with ease. Visualize progress, celebrate achievements.
                                  Start now, see results tomorrow!</p>
                          </div>

                          <span class="badge bg-design rounded-pill ms-auto">14</span>
                      </div>

                      <img src="images/topics/undraw_Remote_design_team_re_urdx.png"
                          class="custom-block-image img-fluid" alt="">
                  </a>
              </div>
          </div>

          <div class="col-lg-6 col-12">
              <div class="custom-block custom-block-overlay">
                  <div class="d-flex flex-column h-100">
                      <img src="images/businesswoman-using-tablet-analysis.jpg"
                          class="custom-block-image img-fluid" alt="">

                      <div class="custom-block-overlay-text d-flex">
                          <div>
                              <h5 class="text-white mb-2">Personalized Insights</h5>
                              <h6>"Unlock Personalized Health Insights"</h6>
                              <p class="text-white">Unlock personalized health insights: Discover your BMI,
                                  understand its impact, and receive tailored recommendations. Our app
                                  considers factors like age, gender, and activity level to provide customized
                                  guidance. Empower yourself with knowledge to make informed wellness
                                  decisions. Start today, take control of your health!</p>
                          </div>

                          <span class="badge bg-finance rounded-pill ms-auto">25</span>
                      </div>

                      <div class="section-overlay"></div>
                  </div>
              </div>
          </div>

      </div>
  </div>
</section>
<!--BMI meaning-->
<section class="bmi-meaning-container" id="section_3">
  <div class="bmi-meaning">
      <img src="./assets/images/image-man-eating.webp" alt="">

      <div class="bmi-meaning-text">
          <h3 class="heading-l">What your BMI result means</h3>
          <p class="body-m"> A BMI range of 18.5 to 24.9 is considered a 'healthy weight.' Maintaining a
              healthy weight may lower your chances of experiencing health issues later on,
              such as obesity and type 2 diabetes. Aim for a nutritious diet with reduced
              fat and sugar content, incorporating ample fruits and vegetables. Additionally,
              strive for regular physical activity, ideally about 30 minutes daily for
              five days a week.</p>
      </div>
  </div>

  <div class="curve-left">
      <img src="./assets/images/pattern-curved-line-left.svg" alt="">
  </div>
</section>

<section class="timeline-section section-padding" id="section_4">
  <div class="section-overlay"></div>

  <div class="container">
      <div class="row">

          <div class="col-12 text-center">
              <h2 class="text-white mb-4">Steps to achieve a proper BMI</h1>
          </div>

          <div class="col-lg-10 col-12 mx-auto">
              <div class="timeline-container">
                  <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                      <div class="list-progress">
                          <div class="inner"></div>
                      </div>

                      <li>
                          <h4 class="text-white mb-3">Healthy eating</h4>

                          <p class="text-white"> Healthy eating promotes weight control, disease prevention,
                              better
                              digestion,
                              immunity, mental clarity, and mood.</p>

                          <div class="icon-holder">
                              <img src="./assets/images/icon-eating.svg" alt="">
                          </div>
                      </li>

                      <li>
                          <h4 class="text-white mb-3">Regular exercise</h4>

                          <p class="text-white">Exercise improves fitness, aids weight control, elevates
                              mood, and
                              reduces disease
                              risk, fostering wellness and longevity.</p>

                          <div class="icon-holder">
                              <img src="./assets/images/icon-exercise.svg" alt="">
                          </div>
                      </li>

                      <li>
                          <h4 class="text-white mb-3">Adequate Sleep</h4>

                          <p class="text-white">Sleep enhances mental clarity, emotional stability, and
                              physical
                              wellness, promoting
                              overall restoration and rejuvenation.</p>

                          <div class="icon-holder">
                              <img src="./assets/images/icon-sleep.svg" alt="">
                          </div>
                      </li>
                  </ul>
              </div>
          </div>

      </div>
  </div>
</section>
<section>
  <div class="limitations">
      <div class="limitations-text">
          <h3 class="heading-l">Limitations of BMI</h3>
          <p class="body-m">Although BMI is often a practical indicator of healthy weight, it is not suited
              for
              every person. Specific groups should carefully consider their BMI outcomes, and in
              certain cases, the measurement may not be beneficial to use.</p>
          <div class="curve-right">
              <img src="./assets/images/pattern-curved-line-right.svg" alt="">
          </div>
      </div>
      <div class="limitations-cards">
          <div class="col-xxl-7 col-xl-10 col-lg-12">
              <div class="cards">
                  <div class="card-body">
                      <div class="icon">
                          <img src="./assets/images/icon-gender.svg" alt="">
                          <h5 class="card-title heading-s">Gender</h5>
                      </div>
                      <p class="body-m">The development and body fat composition of girls and boys vary with
                          age.
                          Consequently,
                          a child's age and gender are considered when evaluating their BMI.</p>
                  </div>
              </div>
          </div>

          <div class="dual-cards">
              <div class="col-sm-12 col-lg-5 col-xl-5">
                  <div class="cards">
                      <div class="card-body">
                          <div class="icon icon-irr">
                              <img src="./assets/images/icon-age.svg" alt="">
                              <h5 class="card-title heading-s">Age</h5>
                          </div>
                          <p class="body-m">In aging individuals, increased body fat and muscle loss may
                              cause
                              BMI to underestimate body fat content.</p>
                      </div>
                  </div>
              </div>

              <div class="col-sm-12 col-lg-5 col-xl-5">
                  <div class="cards">
                      <div class="card-body">
                          <div class="icon icon-irr">
                              <img src="./assets/images/icon-muscle.svg" alt="">
                              <h5 class="card-title heading-s">Muscle</h5>
                          </div>
                          <p class="body-m">BMI may misclassify muscular individuals as overweight or obese,
                              as
                              it doesn't
                              differentiate muscle from fat</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="dual-cards2">
              <div class="col-sm-4">
                  <div class="cards">
                      <div class="card-body">
                          <div class="icon">
                              <img src="./assets/images/icon-pregnancy.svg" alt="">
                              <h5 class="card-title heading-s">Pregnancy</h5>
                          </div>
                          <p class="body-m card-p2"> Expectant mothers experience weight gain due to their
                              growing baby. Maintaining a
                              healthy pre-pregnancy BMI is advisable to minimise health risks for both mother
                              and child.</p>
                      </div>
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="cards">
                      <div class="card-body">
                          <div class="icon">
                              <img src="./assets/images/icon-race.svg" alt="">
                              <h5 class="card-title heading-s">Race</h5>
                          </div>
                          <p class="body-m">Certain health concerns may affect individuals of some Black and
                              Asian origins at
                              lower BMIs than others. To learn more, it is advised to discuss this with your
                              GP or practice nurse.</p>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>

  </div>
</section>
  
@endsection