@extends('layouts.Site.app')
@section('site_content')

  <!--main-banner-->
  <section class="main">
    <section class="video-bg">
      <video autoplay loop class="collapse in" id="video_background" preload="auto" autoplay="autoplay" loop="loop"
        muted="muted">
        <source src="video/video-2.mp4" type="video/mp4">
        <source src="video/video-2.ogv.html" type="video/ogv">
        <source src="video/video-2.webm.html" type="video/webm">
        bgvideo
      </video>
    </section>

    <div class="BG-overlay"></div>
    <!--site-title-->
    <div class="site-title wow fadeInDown">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="title-txt">
                    <h3> هي شركه رائده في مجال تصميم وتطوير المواقع الالكترونيه
                      والتطبيقات علي الاندرويد و الايفون</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="title-txt">
                    <h3>تقدم لك الشركه حلول تساعد الشركات و المؤسسات علي رفع معدلات الدخل و النمو
                      وتطوير حركه الانتاج من خلال التجاره الالكترونيه علي الاندرويد والايفون و
                      الويندوز وتوظيف الذكاء الاصطناعي لتحليل البيانات</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="title-txt">
                    <h3> تقدم لك الاستشارات الفنيه و البرمجيه لرواد الاعمال كما
                      تساعدهم علي التطور السريع من خلال احدث طرق الذكاء الاصطناعي وتحليل البيانات
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--about-company-->
  <section class="about-company" id="about-company">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6 col-12">
          <h1>عن الشركه </h1>
          <div class="line"></div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="about-company-txt hvr-sweep-to-bottom wow fadeInRight">
                <h5><strong><i class="fas fa-info pl-2 ml-2" style="border-left: 1px solid ; "></i> عن الشركة</strong>
                  <br> التقنيه هي شركه متخصصه
                  في برمجه تطبيقات الجوال و الموبايل علي الهواتف
                  الذكيه والاجهزه اللوحيه لانظمه الاندرويد والايفون و الويندوز
                  <!-- <span class=" d-block text-left pl-2" > <a href="about-us.html" > قراءة المزيد  </a> </span> -->
                </h5>
              </div>
              <div class="about-company-txt hvr-sweep-to-bottom wow fadeInRight">
                <h5><strong><i class="fas fa-eye pl-2 ml-2" style="border-left: 1px solid ; "></i> الرؤية</strong> <br>
                  تقدم لك الشركه حلول تساعد الشركات و
                  المؤسسات علي رفع معدلات الدخل و النمو وتطوير
                  حركه الانتاج من خلال التجاره الالكترونيه علي الاندرويد والايفون و الويندوز وتوظيف
                  الذكاء الاصطناعي لتحليل البيانات </h5>
              </div>
              <div class="about-company-txt hvr-sweep-to-bottom wow fadeInRight">
                <h5><strong><i class="far fa-edit pl-2 ml-2" style="border-left: 1px solid ; "></i> رسالتنا </strong>
                  <br> التقنيه تقدم لك الاستشارات الفنيه و
                  البرمجيه لرواد الاعمال كما تساعدهم
                  علي التطور السريع من خلال احدث طرق الذكاء الاصطناعي وتحليل البيانات</h5>
              </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <img src="img/about-img.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--our-service-->
  <section class="our-service" id="our-service">
    <div class="BG-overlay"></div>


    <div class="container service-container">
      <h1>خدماتنا</h1>
      <div class="line"></div>
      <div id="what-we-do" class=" owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
          <div class="owl-stage">
            <div class="owl-item wow fadeInUp">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fab fa-windows fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>برمجه التطبيقات علي الويندوز</h5>
                  <p> تقدم الشركه خدمه برمجه التطبيقات علي الويندوز وعمل صفحلت اعلي الويب سايت بافضل طريقه
                    ممكنه وحديثه </p>
                </div>
              </div>
            </div>
            <div class="owl-item wow fadeInDown">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fab fa-apple fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>برمجه التطبيقات علي الايفون</h5>
                  <p>نقوم ببرمجه تطبيقات الايفون وكذلك رفعها علي المتجر الخاص بالايفون app store ونقوم
                    بتصميم التطبيقات بجوده عاليه وتصميمات عاليه </p>
                </div>
              </div>
            </div>
            <div class="owl-item wow fadeInUp">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fab fa-android fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>برمجه التطبيقات علي الاندرويد</h5>
                  <p> نقوم ببرمجه تطبيقات بالاندرويد وكذلك رفعها علي المتجر الخاص بالاندرويد google play
                    ونقوم بتصميم التطبيقات بجوده عاليه وتصميمات عاليه </p>
                </div>
              </div>
            </div>
            <div class="owl-item wow fadeInDown">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fas fa-paint-brush fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>خدمات التصميم</h5>
                  <p>لسنا شركة تصميم عادية من اعمالنا تضح الانجازات , لدينا عديد من المبدعين والموهبين في
                    هذا المجال , تصميم المواقع ليس كلمة عادية فهذة الخدمة هي طريق النجاح لك علي الانترنت
                  </p>
                </div>
              </div>
            </div>
            <div class="owl-item wow fadeInUp">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fab fa-usb fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>خدمات الاستضافه</h5>
                  <p> نقوم بتوفير خدمة استضافة المواقع الالكترونية على شبكة الانترنت لكافة العملاء سواء
                    نحن من قام بتصميم وبرمجة الموقع المستضاف ام لا </p>
                </div>
              </div>
            </div>
            <div class="owl-item wow fadeInDown">
              <div class=" rorate-col">
                <div class="rotate_icon">
                  <i class="fas fa-seedling fa-3x"></i>
                </div>
                <div class="what-we-do ">
                  <h5>تصميم الهويه</h5>
                  <p>فقط خطط لمشروعك وأترك تصميم هوية المشروع الألكترونية لنا من ( لوجهات , بنرات , موقع
                    الشركة الألكتروني , ...) و كل ما يخص هوية شركتك علي الأنترنت </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--======our-PORTFOLIO-->
  <section class="our-portfolio" id="our-portfolio">

    <div class="container-fliud portfolio-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <h1>اعمالنا </h1>
          <div class="line line4 "></div>
          <h5 class=" text-muted">بعض من الاعمال والتطبيقات التي قمنا بها</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow  fadeInRight">
          <div class="hovereffect">
            <img class="img-responsive" src="img/portfolio/3.png" alt="">
            <div class="overlay">
              <h2>هم هم</h2>
              <a class="info" target="_blank"
                href="https://play.google.com/store/apps/details?id=com.creativeshare.humhum">مشاهده
                المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow  flipInY">
          <div class="hovereffect">
            <img class="img-responsive " src="img/portfolio/18.png" alt="">
            <div class="overlay">
              <h2>المؤسسه العامه للتامينات الاجتماعيه</h2>
              <!--                            <a class="info" target="_blank" target="_blank" href="#">مشاهده المزيد</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow  fadeInDown">
          <div class="hovereffect">
            <img class="img-responsive " src="img/portfolio/20.jpg" alt="">
            <div class="overlay">
              <h2>قوات امن المنشات</h2>
              <!--                            <a class="info" target="_blank" href="#">مشاهده المزيد</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow  zoomIn">
          <div class="hovereffect">
            <img class="img-responsive " src="img/portfolio/19.png" alt="">
            <div class="overlay">
              <h2>وزاره الصحه</h2>
              <!--                            <a class="info" target="_blank" href="#">مشاهده المزيد</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow  fadeInRight">
          <div class="hovereffect">
            <img class="img-responsive " src="img/portfolio/8.png" alt="">
            <div class="overlay">
              <h2>شيل كوم</h2>
              <a class="info" target="_blank" target="_blank"
                href="https://play.google.com/store/apps/details?id=com.creativeshare.shell_com">مشاهده
                المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow flipInY">
          <div class="hovereffect">
            <img class="img-responsive" src="img/portfolio/15.png" alt="">
            <div class="overlay">
              <h2>تدللي</h2>
              <a class="info" target="_blank"
                href="https://play.google.com/store/apps/details?id=com.creativeshare.tdlly">مشاهده
                المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInDown">
          <div class="hovereffect">
            <img class="img-responsive" src="img/portfolio/2.png" alt="">
            <div class="overlay">
              <h2>امداد</h2>
              <a class="info" target="_blank"
                href="https://play.google.com/store/apps/details?id=com.creativeshare.emdad">مشاهده
                المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow zoomIn">
          <div class="hovereffect">
            <img class="img-responsive " src="img/portfolio/%D8%AB%D9%82%D8%A9.png" alt="">
            <div class="overlay">
              <h2>ثقه</h2>
              <a class="info" target="_blank"
                href="https://play.google.com/store/apps/details?id=com.arab_developers_apps.theqah">مشاهده
                المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

          <button type="button" class="btn btn-outline-purple "><a href="portfolio.html">مشاهده
              المزيد</a></button>
        </div>
      </div>
    </div>
  </section>




  <section class="portfolio-made " id="portfolio-made">
    <div class="container-fliud portfolio-made-container">
      <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 col-0 "></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
          <div class="count wow fadeInUp ">5</div>
          <h5>دول نخدمها</h5>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
          <div class="count wow fadeInUp ">39</div>
          <h5>موقع الكتروني</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
          <div class="count wow fadeInUp ">27</div>
          <h5>تطبيق اندرويد</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-6 ">
          <div class="count wow fadeInUp ">27</div>
          <h5>تطبيق ايفون</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
          <div class="count wow fadeInUp ">45</div>
          <h5>عملاء سعداء</h5>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-0 "></div>


      </div>
    </div>
  </section>

  <!-- =================================== -->

  <section class="steps" id="steps">
    <div class="container">
      <h1 class=" wow fadeInDown">العمليات التنفيذية </h1>
      <div class="line line4 "></div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6 col-12 first-step">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
              <div class="first-step-txt">
                <h3 class=" wow fadeInDown ">1. تحديد الاستراتجيه</h3>
                <p class=" wow fadeInDown">
                  نحن فعلا ندرس المحتوي بشكل جيد قبل ان نبدا . نحن نسأل عن المزيد من الأسئلة حول ما الذي كانوا عليه
                  فعلاً . ومع تحولنا إلى قصة ، فقد بدأنا في تشغيلها على الموقع ، حيث سيتحقق المستخدمون من موقعهم على
                  الويب.</p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
              <div class="first-step-img wow fadeInUp ">
                <img class="img-thumbnail " src="img/business-background.jpg">
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-12 col-md-12 col-sm-6 col-12 first-step">
          <div class="row">
            <div class=" col-12 mid-pic">
              <img src="img/dotted-line-png-2.png" class="wow fadeInUp w-auto">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
              <div class="second-step-txt">
                <h3 class=" wow fadeInDown ">2. التصميم</h3>
                <p class=" wow fadeInDown">
                  نضع للشركه تصميمًا ونحاول إيجاد حلول ناجحة لعملائنا سريعًا ، يعني البحث عن طرق جديدة ليبدو المنتج في
                  افضل حاله . يُعد تصميم الويب اول خطوه في عمليه اعداد الموقع ودعمنا وسيلةً للاستمرار في متابعة العمل
                  ويتم التواصل مع العملاء عبر جميع مراحل التطوير ، وكذلك بعد انتهاء العمل. </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
              <div class="second-step-img  wow fadeInUp ">
                <img class="img-thumbnail" src="img/design.png">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-6 col-12 first-step">

          <div class="row">
            <div class=" col-12 mid-pic">
              <img src="img/dotted-line-png-2.png" class="wow fadeInUp w-auto">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">
              <div class="third-step-txt ">
                <h3 class=" wow fadeInDown ">3. التطوير</h3>
                <p class=" wow fadeInDown">بعد عمليه التصميم تبدا عمليه تطوير الموقع وذلك باحدي لغات البرمجه PHP ونتابع
                  العمل لجع الموقع تفاعلي بالنسبه للمستخدم وكذلك يمكنك اداره موقعك بكل سهوله وامان ونجعلك يمكنك اداره
                  موقعك باكثر من لغه سواء كانت عربيه او انجليزيه او اي لغه اخري </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
              <div class="third-step-img  wow fadeInUp ">
                <img class="img-thumbnail" src="img/develop.jpg">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-6 col-12 first-step">

          <div class="row">
            <div class=" col-12 mid-pic">
              <img src="img/dotted-line-png-2.png" class="wow fadeInUp w-auto">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-6 col-12 ">

              <div class="fourth-step-txt">
                <h3 class=" wow fadeInDown ">4. تقديم المنتج</h3>
                <p class=" wow fadeInDown">تقديم المنتج بافضل طريقه تناسب المالك و المستخدم وتجعل تصفح موقعك اكثر متعه
                  وتفاعل مع الاخرين وكذلك امكانيه التفاعل مع المستخدم للموقع </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-6 col-12 ">
              <div class="fourth-step-img  wow fadeInUp ">
                <img class="img-thumbnail" src="img/launch.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="Testimonials-section">
    <div class="container">


      <!--Section: Content-->
      <section class="text-center dark-grey-text">

        <!-- Section heading -->
        <h3 class="font-weight-bold mb-4 pb-2">آراء العملاء</h3>

        <div class="wrapper-carousel-fix">
          <!-- Carousel Wrapper -->
          <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade"
            data-ride="carousel" data-interval="false">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto mb-4 pt-3">
                    <img src="img/300_9.jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                  </div>
                  <!--Content-->
                  <p>
                    <i class="fas fa-quote-right ml-2"></i>
                    هذه الشركة من افضل الشركات التي تعاملت معها في مجال البرمجة وإنشاء التطبيقات وتطويرها سواء كانت
                    مواقع ويب او اندرويد او ios
                    <i class="fas fa-quote-left mr-2"></i>
                  </p>
                  <h4 class="font-weight-bold">أبو مريف</h4>
                  <h6 class="font-weight-bold my-3">رجل اعمال</h6>
                  <!--Review-->
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <!-- <i class="fas fa-star-half-alt orange-text"> </i> -->
                </div>
              </div>
              <!--First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto mb-4  pt-3">
                    <img src="img/300_13.jpg" class="rounded-circle img-fluid" alt="Second sample avatar image">
                  </div>
                  <!--Content-->
                  <p>
                    <i class="fas fa-quote-right ml-2"></i>
                    هذه الشركة من افضل الشركات التي تعاملت معها في مجال البرمجة وإنشاء التطبيقات وتطويرها سواء كانت
                    مواقع ويب او اندرويد او ios
                    <i class="fas fa-quote-left mr-2"></i>
                  </p>
                  <h4 class="font-weight-bold">محمد آل نهيان</h4>
                  <h6 class="font-weight-bold my-3">رجل اعمال</h6>
                  <!--Review-->
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                  <i class="fas fa-star orange-text"> </i>
                </div>
              </div>
              <!--Second slide-->

            </div>
            <!--Slides-->
            <!--Controls-->
            <a class="carousel-control-prev right carousel-control" style="right: auto ;" href="#carousel-example-1"
              role="button" data-slide="prev">
              <span class="icon-prev" aria-hidden="true"></span>
              <span class="sr-only">السابق</span>
            </a>
            <a class="carousel-control-next left carousel-control" href="#carousel-example-1" role="button"
              data-slide="next">
              <span class="icon-next" aria-hidden="true"></span>
              <span class="sr-only">التالي</span>
            </a>
            <!--Controls-->
          </div>
          <!-- Carousel Wrapper -->
        </div>

      </section>
      <!--Section: Content-->


    </div>

  </section>

  <!--social-media -->
  <section class="social-media">
    <div class="overlay2"></div>
    <div class=" media">
      <div class="container">
        <h2>كن علي اتصال</h2>
        <div class="line"></div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow fadeInDown">
            <a href="https://api.whatsapp.com/send?phone=966539044145" target="_blank">
              <i class="fab fa-whatsapp fa-3x WS "></i>
            </a>
            <h5>واتس اب</h5>
            <p>انضم للمحادثه</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow fadeInDown">
            <a href="https://www.facebook.com/tatawey" target="_blank">
              <i class="fab fa-facebook fa-3x FB "></i></a>
            <h5>فيس بوك</h5>
            <p>انضم للمحادثه</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow fadeInDown ">
            <a href="https://twitter.com/tatawy_hesham?fbclid=IwAR28uygl1r7lIIRYTBG5HKnMztUChWNJkrbDi7J2fhQxsuUVutRx7iCK44c"
              target="_blank">
              <i class="fab fa-twitter fa-3x TT "></i></a>
            <h5>تويتر</h5>
            <p>انضم للمحادثه</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow fadeInDown ">
            <a href="mailto:heshamtatawy@gmail.com">
              <i class="fab fa-google-plus-g fa-3x GP"></i></a>
            <h5>جوجل بلس</h5>
            <p>انضم للمحادثه</p>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection

