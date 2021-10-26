<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- include libraries(jQuery, bootstrap)
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

-->

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Normalize.css">
    <link rel="stylesheet" href="css/CustomBootstrap.css">
    <link rel="stylesheet" href="css/MainStyle.css">

    <title>عيادات الموج | افضل عيادات تجميلية في السعودية</title>


</head>

<body id="body">
    <header style="height: 100vh;">
        <nav id="header">
            <a href="#">
                <img id="logo" src="https://static1.s123-cdn-static-a.com/uploads/4858436/400_60319e2e9da0e.png"
                    alt=" عيادات الموج ">
            </a>
            <div id="mainMenu">
                <ul id="MenuList">
                    <li>
                        <a class="link" href="{{route('index')}}">الرئيسية</a>
                    </li>

                    <li>
                        <a class="link" href="{{route('Aboutus')}}">حول موج </a>
                    </li>

                    <li>
                        <div id="more">
                            <input type="checkbox" id="moreShowServeses" hidden="">
                            <div id="moreSelectServeses">
                                <label for="moreShowServeses" id="moreLable">
                                    خدماتنا
                                </label>
                                <div id="moreMenuServeses">
                                    <ul class="moreMenuList">
                                        <li><a href={{route('Non-surgical')}}>تجميل لا جراحي</a></li>
                                        <li><a href={{route('Dermatology')}}>الجلدية</a></li>
                                        <li><a href={{route('SkinLaser')}}>ليزر علاج البشرة</a></li>
                                        <li><a href={{route('LaserHair')}}>ليزرعلاج الشعر</a></li>
                                        <li><a href={{route('RegularCare')}}>العناية الدورية</a></li>
                                        <li><a href={{route('Dermatology')}}>طب الاسنان</a></li>
                                        <li><a href={{route('Lab')}}>المختبر الطبي</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <a class="link" {{route('Offers')}}>العروض </a>
                    </li>

                    <li>
                        <a class="link" {{route('BeautyDeals')}} >صفقات الجمال</a>


                    <li>
                        <div id="more">
                            <input type="checkbox" id="moreShow" hidden="">
                            <div id="moreSelect">
                                <label for="moreShow" id="moreLable">
                                    المزيد
                                </label>
                                <div id="moreMenu">
                                    <ul class="moreMenuList" id="moreList">
                                        <li>
                                            <a class="link" {{route('LoyaltyCard')}} >بطاقات الولاء</a>
                                        </li>
                                        <li>
                                            <a {{route('BeautyPassport')}} >جواز سفر الجمال</a>
                                        </li>
                                        <li>
                                            <a {{route('BookDate')}} >حجز موعد</a>
                                        </li>
                                        <li>
                                            <a {{route('Pharmacy')}} >الصيدلية</a>
                                        </li>
                                        <li>
                                            <a {{route('Asag')}}>مركز آساج الرياضي</a>
                                        </li>
                                        <li>
                                            <a {{route('Blog')}} >المدونة</a>
                                        </li>
                                        <li>
                                            <a {{route('Contact')}} >الاتصال</a>
                                        </li>


                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <label for="showLanguagePage">
                            <img class="mainMenuIcons" src="img/AR.png" alt="AR"></label>
                    </li>
                    <li>
                        <label for="showSharePage">
                            <i class="fas fa-share-alt mainMenuIcons"></i>
                        </label>

                    </li>
                    <li>
                        <label for="showSendEmailPage">
                            <i class="fas fa-envelope mainMenuIcons"></i>
                        </label>
                    </li>
                    <li>
                        <label for="showCallUsAlirtPage">
                            <i class="fas fa-phone-alt mainMenuIcons"></i>
                        </label>
                    </li>
                    <li>
                        <a {{route('ClientZone')}}  class="mainMenuIcons" id="User"></a>
                    </li>


                </ul>
            </div>

            <!--  </!-div>-->
            <div id="soialMediaHeaderMobile">
                <label for="showSendEmailPage">
                    <i class="fas fa-envelope mainMenuIcons"></i>
                </label>
                <label for="showCallUsAlirtPage">
                    <i class="fas fa-phone-alt mainMenuIcons"></i>
                </label>
            </div>
        </nav>
        <input type="checkbox" name="mobileWrap" id="mobileWrap" hidden="">
        <label id="menu" for="mobileWrap">
            <div class="menuIcon" id="menuIcon1"></div>
            <div class="menuIcon" id="menuIcon2"></div>
            <div class="menuIcon" id="menuIcon3"></div>
        </label>

        <aside>
            <div id="balckBackgroundMobile"></div>
            <div id="innerAside">
                <ul id="MainMobileBar">

                    <li class="MobileBarItem">
                        <a {{route('index')}} >الرئيسية</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Aboutus')}} >حول الموج</a>
                    </li>
                    <li class="MobileBarItem" id="MobileBarServeces">
                        <a href="#">

                            <label for="showMobileSeveces">
                                خدماتنا
                            </label>

                        </a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Offers')}}>العروض</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('BeautyDeals')}} >صفقات الجمال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('LoyaltyCard')}} >بطاقات الولاء</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('BeautyPassport')}} >جواز سفر الجمال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('BookDate')}} >حجز موعد</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Pharmacy')}} >الصيدلية</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Asag')}} >مركز آساج الرياضي</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Blog')}} >المدونة</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Contact')}} >الاتصال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Offers')}}>جديد عروضنا</a>
                    </li>
                    <li class="MobileBarItem">
                        <a {{route('Offers')}}>جديد العروض</a>
                    </li>
                </ul>
                <input type="checkbox" name="showMobileSeveces" id="showMobileSeveces"
                    onchange="showMobileBarServeces(this)" hidden>
                <ul id="showMobileBarServeces">
                    <li class="MobileBarItem" id="MobileBarServeces">
                        <a href="#">
                            <label for="showMobileSeveces">خدماتنا</label>
                        </a>
                    </li>
                    <li><a {{route('Non-surgical')}} >تجميل لا جراحي</a></li>
                    <li><a {{route('Dermatology')}}  >الجلدية</a></li>
                    <li><a {{route('SkinLaser')}}>ليزر علاج البشرة</a></li>
                    <li><a {{route('LaserHair')}}  >ليزرعلاج الشعر</a></li>
                    <li><a {{route('RegularCare')}} >العناية الدورية</a></li>
                    <li><a {{route('Dentist')}}  >طب الاسنان</a></li>
                    <li><a {{route('Lab')}}  >المختبر الطبي</a></li>
                </ul>

                <div id="soialMediaMobile">


                    <label for="showLanguagePage">
                        <img class="mainMenuIcons" src="img/AR.png" alt="AR"></label>
                    <label for="showSharePage">
                        <i class="fas fa-share-alt mainMenuIcons"></i>
                    </label>

                    <label for="showSendEmailPage">
                        <i class="fas fa-envelope mainMenuIcons"></i>
                    </label>
                    <label for="showCallUsAlirtPage">
                        <i class="fas fa-phone-alt mainMenuIcons"></i>
                    </label>
                    <a {{route('ClientZone')}}  class="mainMenuIcons" id="User"></a>
                    <!--
                        <img src="/img/twitter.svg" alt="">
                    <img src="/img/twitter.svg" alt="">
                    <img src="/img/twitter.svg" alt="">
                    <img src="/img/twitter.svg" alt="">-->


                </div>
            </div>
        </aside>

        <div style="background-color: black; height:100%; position: relative;">
            <video class="backgroundVideo" autoplay="" loop="" muted="" playsinline=""
                poster="https://static.s123-cdn-static-d.com/uploads/4858436/normal_611cd814bdcee-thumbnail.jpg">
                <source type="video/mp4" src="https://cdn-media.f-static.net/uploads/4858436/normal_611cd814bdcee.mp4">
            </video>
        </div>
        <div id="headerTextsWrape">
            <h1 id="HeaderTitle">خلي جمالك علينا
            </h1>
            <h1 id="HeaderText"> أكتشف الكثير من العروض المميزة</h1>
            <a href="#" id="HeaderButton" class="moreLinkBtn"> الإطلاع على المزيد</a>
        </div>


    </header>




    <div id="contant">

        <div id="Welcom">
            <div id="WelcomeTextWrap">
                <h2>أهلا وسهلا بكم بمجموعة عيادات الموج</h2>

                <p id="welcomeText">
                    في عام 2006 تقرر انشاء مجموعة عيادات الموج، بهدف تقديم
                    خدمات طبية تجميلية للمجتمع ، بـ قيم تتمثل بتقديم مستوى
                    خدمة ذو جودة عالية. تهتم عيادات الموج بتقديم الأفضل
                    الى كل عميل, لذلك يتم اختيار فريق العمل بدقة عاليه
                    لتتناسب مع الرسالة المراد ايصالها الى عملائنا .
                    ان ثقة عملائنا هي هدفنا .
                </p>
            </div>
            <div id="welcomImg">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active  ">
                            <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_603a792fe40f0.jpg"
                                class="d-block w-100" alt="img/">
                        </div>
                        <div class="carousel-item carousel-item-next  ">
                            <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_603a792fe40f0.jpg"
                                class="d-block w-100" alt="img/">
                        </div>
                        <div class="carousel-item">
                            <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_603a792fe40f0.jpg"
                                class="d-block w-100" alt="img/">
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div id="serveces">
            <div id="servecesTextWrap" class="PageTitle">
                <h2>الخدمات</h2>
            </div>
            <div id="servecesContenerWrpa">
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>
                <div id="servecContener">
                    <div id="servecTitle">
                        <h3>التجميل اللاجراحي</h3>
                    </div>
                    <img id="servecIcon" src="img/twitter.png" alt="">
                    <div id="servecText">
                        <p>
                            تتواجد في عيادات الموج احدث طرق العلاج في التجميل اللاجرحي باستخدام تقنيات تناسب طبيعة ايقاع
                            الحياة السريع بفترات
                            استشفاء قصيرة وفترة معالجة سريعة

                        </p>
                    </div>
                    <div>
                        <a href="#" id="servecLink"> الإطلاع على المزيد</a>
                    </div>

                </div>

            </div>
        </div>
        <div style="margin-top: 100px;">
            <div id="contanct">
                <h2>كيف يمكننا مساعدتك</h2>
                <p id="contanctUs_p"> نحن في خدمتك للإجابة عن اي سؤال او استفسار يخص العيادة او الخدمات المقدمة
                    ممثلي خدمة العملاء وفريقنا الطبي على أتم الاستعداد للمساعدة </p>
                <a href="tel:920009125" class="moreLinkBtn" id="contanctButton"> اتصل بنا </a>
            </div>

            <div id="contactFixedBackgound"></div>
        </div>

        <div id="offers">
            <div class="PageTitle">

                <h2>صفقات الجمال</h2>
            </div>
            <div id="offersContener">
                <div id="state">
                    <option id="now" selected class="state">
                        الحالية
                    </option>
                    <option id="previous" class="state">
                        السابقة
                    </option>
                </div>

                <!--<select size="2" id="state">
                    <option id="now" selected class="state">
                        الحالية
                    </option>
                    <option id="previous" class="state">
                        السابقة
                    </option>
                </select>-->
                <button id="filter" onclick="ShowFilterFoeMobile()">filter</button>

                <div id="offersWrap">
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_610c09b302459.png" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_610c09b302459.png" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_615c125f5cd9a.jpg" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_610c09b302459.png" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_610c09b302459.png" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                    <div class="OneOfferWrap">
                        <div class="offerExpDate"> 30 may</div>
                        <div class="offerNameOverImg"> خلي الليزر اختيارك</div>
                        <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_610c09b302459.png" alt=""
                            class="offerImg">
                        <div class="offerDetails">
                            <div class="offerTitle">
                                <a href="#" class="h4" style="font-size:1.02rem;">جلسة ليزر إزالة شعر للجسم كامل " مع
                                    الرتوش "</a>
                            </div>
                            <div class="offerPrice">2523 ر.س</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div id="medicalTeam">
            <div class="PageTitle">
                فريقنا الطبي
            </div>
            <div id="doctors">
                <div id="DoctorCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner DoctorsSlider" id="DoctorCarousel">

                        <div class="carousel-item custom  ">
                            <div class="w-50 doctorImgWrap ">
                                <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_crop_6044cc3343576_6044cc1eaaf29.jpg"
                                    class="d-block doctorImg w-100" alt="img/">
                            </div>
                            <div class="doctorInfo">
                                <div class="doctorpart">فرع حراء
                                </div>
                                <div class="DoctorName h2">حسام الدين ربيع
                                </div>
                                <div class="doctorspas h5">اخصائي تقويم اسنان
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item custom  ">
                            <div class="w-50 doctorImgWrap ">
                                <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_crop_6044cc3343576_6044cc1eaaf29.jpg"
                                    class="d-block doctorImg w-100" alt="img/">
                            </div>
                            <div class="doctorInfo">
                                <div class="doctorpart">فرع حراء
                                </div>
                                <div class="DoctorName h2">حسام الدين ربيع
                                </div>
                                <div class="doctorspas h5">اخصائي تقويم اسنان
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item custom active ">
                            <div class="w-50 doctorImgWrap ">
                                <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/2000_crop_6044cc3343576_6044cc1eaaf29.jpg"
                                    class="d-block doctorImg w-100" alt="img/">
                            </div>
                            <div class="doctorInfo">
                                <div class="doctorpart">فرع حراء
                                </div>
                                <div class="DoctorName h2">حسام الدين ربيع
                                </div>
                                <div class="doctorspas h5">اخصائي تقويم اسنان
                                </div>
                            </div>

                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#DoctorCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#DoctorCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


        <div id="Date">
            <div class="PageTitle">
                حجز موعد
            </div>
            <div id="FormWrap" class="container">
                <form method="post">
                    <div id="DateNameWrap" class="  customContainer">
                        <label for="">الأسم <span class="requierd">*</span></label>
                        <input type="text" name="DateName" id="DateName" required class="DateInput"
                            placeholder="إجابتك">
                    </div>
                    <div id="DatePhoneWrap" class="container  customContainer">
                        <label for="">رقم الجوال <span class="requierd">*</span></label>
                        <input type="text" name="DatePhone" id="DatePhone" required class="DateInput"
                            placeholder="إجابتك">
                    </div>
                    <div id="DateEmailWrap" class="container  customContainer">
                        <label for="">البريد الإلكتروني <span class="requierd">*</span></label>
                        <input type="text" name="DateEmail" id="DateEmile" required class="DateInput"
                            placeholder="إجابتك">
                    </div>
                    <div id="DateFileWrap" class="container  customContainer">
                        <label for="">هل يوجد لديك ملف في العيادة ؟ <span class="requierd">*</span></label>


                        <input type="radio" name="DateFile" value="true" id="true" required class="DateInput">
                        <label for="true"> نعم </label>
                        &nbsp;&nbsp;
                        <input type="radio" name="DateFile" id="False" value="false" class="DateInput">
                        <label for="False"> لا </label>

                    </div>
                    <div id="DateSrcWrap" class="container  customContainer">
                        <label for="">تم الحجز عن طريق ؟ (الصفحة التي تم الضغط على رابط الحجز من خلالها)
                            <span class="requierd">*</span></label>
                        <div id="customSelect">
                            <select name="">
                                <option value="face"> إختار</option>
                                <option value="face">الموقع الإلكتروني</option>
                                <option value="face">إنستقرام</option>
                                <option value="face">السناب شات</option>
                                <option value="face">التويتر</option>
                                <option value="face">الفيسبوك</option>
                                <option value="face">البريد الإلكتروني</option>
                            </select>
                            <div id="custemSelectArow"></div>
                        </div>



                    </div>
                    <div id="DateTimeWrap" class="container  customContainer">
                        <label for="">وقت الموعد
                            <span class="requierd">*</span></label>
                        <input type="radio" name="DateFile" value="true" id="true" required class="DateInput">

                        <label for="FirstTime"> من 9:00 صباحا إلى 5:00 عصرا</label>

                        <br>
                        <input type="radio" name="DateFile" id="False" value="false" class="DateInput">
                        <label for="False"> من 5:00 عصرا إلى 10:00 مساء </label>
                    </div>
                    <div id="DateTimeDateWrap" class="container  customContainer">
                        <label for="">تاريخ الموعد <span class="requierd">*</span></label>
                        <input type="date" name="DateTimeDate" id="DateTimeDate" required class="DateInput">
                    </div>
                    <div id="DatePartWrap" class="container  customContainer">
                        <label for="">القسم المطلوب <span class="requierd">*</span></label>
                        <div id="customSelect">
                            <select name="">
                                <option value="face"> إختار</option>
                                <option value="face">الأسنان</option>
                                <option value="face">التجميل الغير جراحي</option>
                                <option value="face">السناب شات</option>
                                <option value="face">الجلدية و الليزر</option>
                                <option value="face">ليزر إزالة الشعر</option>
                                <option value="face">العناية بالبشرة</option>
                                <option value="face">المختبر</option>
                            </select>
                            <div id="custemSelectArow"></div>
                        </div>
                    </div>
                    <div id="DateDescriptionWrap" class="container  customContainer">
                        <label for="">تفاصيل الخدمة أو العرض
                        </label>
                        <input type="text" name="DateDescription" id="DateDescription" class="DateInput"
                            placeholder="إجابتك">
                    </div>
                    <input type="submit" value="حجز" class="btn btn-success">
                </form>
            </div>
        </div>
        <div id="insurances" style="height: 350px;">
            <div class="PageTitle">التأمين الصحي</div>
            <!-- <div class="sliderCover"></div>-->
            <div id="silderWrap" class="col-lg-12">
                <div id="linerSlider">
                    <div class="item">
                        <img src="img/1.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/2.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/3.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/4.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/5.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/6.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/7.jpg" class="sliderImg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/8.jpg" class="sliderImg" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="sliderCover" style="left: 0;"></div>-->
        </div>


        <div id="blog">
            <div class="PageTitle">المدونة</div>
            <div id="posts">
                <div class="post">
                    <a href="#">
                        <img class="postImg"
                            src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_6123996fb9fd5.jpg" alt=""
                            srcset=""></a>
                    <div class="postInfo">
                        <a href="#" class="postTitle"> العمر مجرد رقم ... مع عيادات الموج</a>
                        <div class="postExcrpt">
                            تفقد البشرة رونقها مع التقدم بالعمر حيث تمثل التجاعيد وترهل الوجه والذقن المزدوج مصدر إزعاج
                            للكثير منا هذه كلها أعراض
                            أساسية لتقدم عمر البشرة. حيث تقل مستويات إفراز هرمونات الكولاجين والإيلاستين بعد عمر ال30.
                            على الرغم من أن الشيخوخة أمر
                            لايمكن التحكم في آثارها إلا أنه يمكن الحد من تأثيرها على مظهرك الخارجي التي تترجم تغيرات في
                            ملامح وجهك على مدى السنوات.
                            تؤثر جيناتك بشكل كبير في هذه التغيرات ولمستها على مظهرك حيث تؤثر العوامل الخارجية والداخلية
                            على صحة بشرتك. أما آثار تقدم
                            السن الخارجي فهو مرتبط بالعوامل الخارجية التي تحفزه مثل أسلوب الحياة، و تعرض البشرة للشمس
                            بشكل كبير.

                        </div>
                        <a class="moreLinkBtn" id="postLink" href="#">اقرأ المزيد</a>
                    </div>
                </div>
                <div class="post">
                    <a href="#">
                        <img class="postImg"
                            src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_6123996fb9fd5.jpg" alt=""
                            srcset=""></a>
                    <div class="postInfo">
                        <a href="#" class="postTitle"> العمر مجرد رقم ... مع عيادات الموج</a>
                        <div class="postExcrpt">
                            تفقد البشرة رونقها مع التقدم بالعمر حيث تمثل التجاعيد وترهل الوجه والذقن المزدوج مصدر إزعاج
                            للكثير منا هذه كلها أعراض
                            أساسية لتقدم عمر البشرة. حيث تقل مستويات إفراز هرمونات الكولاجين والإيلاستين بعد عمر ال30.
                            على الرغم من أن الشيخوخة أمر
                            لايمكن التحكم في آثارها إلا أنه يمكن الحد من تأثيرها على مظهرك الخارجي التي تترجم تغيرات في
                            ملامح وجهك على مدى السنوات.
                            تؤثر جيناتك بشكل كبير في هذه التغيرات ولمستها على مظهرك حيث تؤثر العوامل الخارجية والداخلية
                            على صحة بشرتك. أما آثار تقدم
                            السن الخارجي فهو مرتبط بالعوامل الخارجية التي تحفزه مثل أسلوب الحياة، و تعرض البشرة للشمس
                            بشكل كبير.

                        </div>
                        <a class="moreLinkBtn" id="postLink" href="#">اقرأ المزيد</a>
                    </div>
                </div>
                <div class="post">
                    <a href="#">
                        <img class="postImg"
                            src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_6123996fb9fd5.jpg" alt=""
                            srcset=""></a>
                    <div class="postInfo">
                        <a href="#" class="postTitle"> العمر مجرد رقم ... مع عيادات الموج</a>
                        <div class="postExcrpt">
                            تفقد البشرة رونقها مع التقدم بالعمر حيث تمثل التجاعيد وترهل الوجه والذقن المزدوج مصدر إزعاج
                            للكثير منا هذه كلها أعراض
                            أساسية لتقدم عمر البشرة. حيث تقل مستويات إفراز هرمونات الكولاجين والإيلاستين بعد عمر ال30.
                            على الرغم من أن الشيخوخة أمر
                            لايمكن التحكم في آثارها إلا أنه يمكن الحد من تأثيرها على مظهرك الخارجي التي تترجم تغيرات في
                            ملامح وجهك على مدى السنوات.
                            تؤثر جيناتك بشكل كبير في هذه التغيرات ولمستها على مظهرك حيث تؤثر العوامل الخارجية والداخلية
                            على صحة بشرتك. أما آثار تقدم
                            السن الخارجي فهو مرتبط بالعوامل الخارجية التي تحفزه مثل أسلوب الحياة، و تعرض البشرة للشمس
                            بشكل كبير.

                        </div>
                        <a class="moreLinkBtn" id="postLink" href="#">اقرأ المزيد</a>
                    </div>
                </div>
                <div class="post">
                    <a href="#">
                        <img class="postImg"
                            src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_6123996fb9fd5.jpg" alt=""
                            srcset=""></a>
                    <div class="postInfo">
                        <a href="#" class="postTitle"> العمر مجرد رقم ... مع عيادات الموج</a>
                        <div class="postExcrpt">
                            تفقد البشرة رونقها مع التقدم بالعمر حيث تمثل التجاعيد وترهل الوجه والذقن المزدوج مصدر إزعاج
                            للكثير منا هذه كلها أعراض
                            أساسية لتقدم عمر البشرة. حيث تقل مستويات إفراز هرمونات الكولاجين والإيلاستين بعد عمر ال30.
                            على الرغم من أن الشيخوخة أمر
                            لايمكن التحكم في آثارها إلا أنه يمكن الحد من تأثيرها على مظهرك الخارجي التي تترجم تغيرات في
                            ملامح وجهك على مدى السنوات.
                            تؤثر جيناتك بشكل كبير في هذه التغيرات ولمستها على مظهرك حيث تؤثر العوامل الخارجية والداخلية
                            على صحة بشرتك. أما آثار تقدم
                            السن الخارجي فهو مرتبط بالعوامل الخارجية التي تحفزه مثل أسلوب الحياة، و تعرض البشرة للشمس
                            بشكل كبير.

                        </div>
                        <a class="moreLinkBtn" id="postLink" href="#">اقرأ المزيد</a>
                    </div>
                </div>
                <div class="post">
                    <a href="#">
                        <img class="postImg"
                            src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_6123996fb9fd5.jpg" alt=""
                            srcset=""></a>
                    <div class="postInfo">
                        <a href="#" class="postTitle"> العمر مجرد رقم ... مع عيادات الموج</a>
                        <div class="postExcrpt">
                            تفقد البشرة رونقها مع التقدم بالعمر حيث تمثل التجاعيد وترهل الوجه والذقن المزدوج مصدر إزعاج
                            للكثير منا هذه كلها أعراض
                            أساسية لتقدم عمر البشرة. حيث تقل مستويات إفراز هرمونات الكولاجين والإيلاستين بعد عمر ال30.
                            على الرغم من أن الشيخوخة أمر
                            لايمكن التحكم في آثارها إلا أنه يمكن الحد من تأثيرها على مظهرك الخارجي التي تترجم تغيرات في
                            ملامح وجهك على مدى السنوات.
                            تؤثر جيناتك بشكل كبير في هذه التغيرات ولمستها على مظهرك حيث تؤثر العوامل الخارجية والداخلية
                            على صحة بشرتك. أما آثار تقدم
                            السن الخارجي فهو مرتبط بالعوامل الخارجية التي تحفزه مثل أسلوب الحياة، و تعرض البشرة للشمس
                            بشكل كبير.

                        </div>
                        <a class="moreLinkBtn" id="postLink" href="#">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="Connection">
            <div class="PageTitle">الإتصال</div>
            <div id="ConnectionWrap">
                <div id="right">
                    <div id="mawj">مجموعة عيادات الموج</div>
                    <div id="phone">
                        <i class="fa fa-phone"></i>
                        <a href="tel:920009125">920009125 - للحجز و الإستفسار</a>
                    </div>
                    <div id="email">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto: info@almawj.net">info@almawj.net</a>
                    </div>
                    <div id="postCode">الرمز البريدي 23523
                    </div>
                    <div id="soialMedia">
                        <img src="img/instagram.png" class="SoialMediaImg">
                        <img src="img/snapchat.png" class="SoialMediaImg">
                        <img src="img/twitter.png" class="SoialMediaImg">
                    </div>

                </div>
                <form id="left">
                    <input type="text" id="NameInpt" class="ConnectionInpt" placeholder="الاسم">
                    <input type="text" id="NameInpt" class="ConnectionInpt" placeholder="الهاتف">
                    <input type="text" id="NameInpt" class="ConnectionInpt" placeholder="البريدالإلكتروني">
                    <label for="type" style="width: 90%;"> اختر</label>
                    <select name="type" id="type" class="ConnectionInpt">
                        <option value="Inquiries">استفسارات</option>
                        <option value="suggestions">شكاوي واقتراحات</option>
                    </select>

                    <textarea rows="7" class="ConnectionInpt" placeholder="رسالك" id="MessageInput"></textarea>
                    <input type="submit" class="ConnectionInpt" value="راسلنا">
                </form>
            </div>
        </div>
    </div>

    <footer>

        <div id="innerFotter">
            <div id="footerInfo">
                مجموعة عيادات الموج
                <br>
                حقوق النشر © 2021 جميع الحقوق محفوظة
            </div>
            <div id="leftFotter">
                <div id="FotterMenu">
                    <ul id="MenuListFotter">
                        <li>
                            <a class="link" {{route('index')}} >الرئيسية</a>
                        </li>

                        <li>
                            <a class="link" {{route('Aboutus')}} >حول موج </a>
                        </li>

                        <li>
                            <div id="moreFotter">
                                <input type="checkbox" id="moreShowServesesFotter" hidden="">
                                <div id="moreSelectServesesFotter">
                                    <label for="moreShowServesesFotter" id="moreLableFotter">
                                        خدماتنا
                                    </label>
                                    <div id="moreMenuServesesFotter">
                                        <ul class="moreMenuList">
                                            <li><a {{route('Non-surgical')}}  >تجميل لا
                                                    جراحي</a></li>
                                            <li><a {{route('Dermatology')}}  >الجلدية</a></li>
                                            <li><a {{route('SkinLaser')}} >ليزر علاج
                                                    البشرة</a></li>
                                            <li><a {{route('LaserHair')}}  >ليزرعلاج الشعر</a>
                                            </li>
                                            <li><a {{route('RegularCare')}} >العناية
                                                    الدورية</a></li>
                                            <li><a {{route('Dentist')}}  >طب الاسنان</a></li>
                                            <li><a {{route('Lab')}}  >المختبر الطبي</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li>
                            <a class="link" {{route('Offers')}}>العروض </a>
                        </li>

                        <li>
                            <a class="link" {{route('BeautyDeals')}} >صفقات الجمال</a>
                        </li>

                        <li>
                            <div id="moreFotter">
                                <input type="checkbox" id="moreShowFotter" hidden="">
                                <div id="moreSelectFotter">
                                    <label for="moreShowFotter" id="moreLableFotter">
                                        المزيد
                                    </label>
                                    <div id="moreMenuFotter">
                                        <ul class="moreMenuList">

                                            <li>
                                                <a class="link" {{route('LoyaltyCard')}} >بطاقات الولاء</a>
                                            </li>
                                            <li>
                                                <a {{route('BeautyPassport')}} >جواز سفر الجمال</a>
                                            </li>
                                            <li>
                                                <a {{route('BookDate')}} >حجز موعد</a>
                                            </li>
                                            <li>
                                                <a {{route('Pharmacy')}} >الصيدلية</a>
                                            </li>
                                            <li>
                                                <a {{route('Asag')}} >مركز آساج الرياضي</a>
                                            </li>
                                            <li>
                                                <a {{route('Blog')}} >المدونة</a>
                                            </li>
                                            <li>
                                                <a {{route('Contact')}} >الاتصال</a>
                                            </li>


                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="subscribeFotter">
                    <form method="post">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="subscribeEmail" id="subscribeEmail">
                        <input type="submit" name="subscribeBtn" id="subscribeBtn" value="إشتراك">
                    </form>
                </div>
                <div id="share">

                    <a href="https://twitter.com/AlmawjClinics" target="_blank">
                        <img src="img/twitter.png" alt="twitter">
                    </a>

                    <a href="https://www.snapchat.com/add/almawjclinics" target="_blank">
                        <img src="img/snapchat.png" alt="snapchat">
                    </a>
                    <a href="https://instagram.com/almawjclinics?igshid=1ww9gbgi8ssq6" target="_blank">
                        <img src="img/instagram.png" alt="instagram">
                    </a>
                </div>
            </div>

        </div>



    </footer>

    <div id="floating">
        <div id="floatingFirst" onlclick="HidFloating(this)" onclick="showFloating(this)">
            <i class="fas fa-comments"></i>
        </div>
        <label for="showSendEmailPage" id="floatingSecond" tabindex="1">
            <i class="fas fa-envelope"></i>
        </label>
        <a href="tel:920009125" id="floatingTheerd">
            <i class="fas fa-phone fa-rotate-90"></i>
        </a>
    </div>

    <input type="checkbox" name="showSendEmailPage" id="showSendEmailPage" hidden>
    <div id="sendEmailPage" class="Alert">

        <label for="showSendEmailPage">
            <i class="fas fa-times fa-1x"></i></label>
        <h3>اتصل بنا</h3>
        <h5>
            setd to <a href="mailto:info@almawj.net">info@almawj.net</a>
        </h5>
        <form method="post">
            <input type="text" name="UserFullName" id="UserFullName">
            <input type="email" name="UserEmail" id="UserEmail">
            <textarea name="EmailContant" id="EmailContant" cols="70" rows="5"></textarea>
            <input type="submit" value="send" id="sendEmail">
        </form>

    </div>



    <input type="checkbox" name="showCallUsAlirtPage" id="showCallUsAlirtPage" hidden>
    <div id="callUsAlertPage" class="Alert">

        <label for="showCallUsAlirtPage">
            <i class="fas fa-times fa-1x"></i></label>
        <a href="tel:920009125">920009125
            -
            للحجز والأستفسار</a>
    </div>

    <input type="checkbox" name="showSharePage" id="showSharePage" hidden>
    <div id="SharePage" class="Alert">

        <label for="showSharePage">
            <i class="fas fa-times fa-1x"></i>
        </label>
        <div>
            <a href="instgram.com">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="instgram.com">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="instgram.com">
                <i class="fab fa-snapchat"></i>
            </a>
        </div>
    </div>




    <input type="checkbox" name="showLanguagePage" id="showLanguagePage" hidden>
    <div id="LanguagePage" class="Alert">

        <label for="showLanguagePage">
            <i class="fas fa-times fa-1x"></i>
        </label>
        <div>
            <a href="instgram.com">
                <h2>AR</h2>
            </a>

            <a href="instgram.com">
                <h2>EN</h2>
            </a>
        </div>
    </div>








    <script src="js/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/Actions.js"></script>
    <script src="js/insurancesSlider.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000,
            pause: false
        })
    </script>


</body>

</html>
