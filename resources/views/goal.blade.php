@extends('layouts.master')

@section('content')
<!-- Jumbotron -->
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index.html">الرئيسية</a></span> <span>الاهداف</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">اهداف المنظمة
                </h1>
            </div>
        </div>
    </div>
</div>
<!--END Juumbotron -->

<!-- Goals -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/IMG-20191226-WA0049.jpg);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align=right><a href="#">الصحة</a></h3>
                        <p align=right>مشروع صيانة وتاهيل وتوسعة المستشفي والمراكز الصحية وتدريب وتأهيل الكوادر الصحية
                            ودعمها بالمعدات الطبية والأدوية المنقذة للحياة وتكثيف حملات إصحاح البئية من مخلفات وأضرار
                            التعدين الأهلي وذلك بتوفير الآليات والمعدات الصحية لهذا المشروع</p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/cause_.jpg);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align="right"><a href="#">مجال الزراعة</a></h3>
                        <p align="right">السعي لتوفير التقاوي والبذور المحسنة و 5تركتوارلصالح الأسر الفقيرة المتعففة
                            للاستفادة منها في الزراعة الحديثة لحرث الوديان الخصبة التي يصعب علي الإنسان زراعتها تقليديا
                            خاصة وأن المنطقة تواجه موجات جفاف وتصحر وقلة في الأمطار مما يحدث فجوات غذائية تهدد الأمن
                            الغذائي للمواطن</p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/event_1.jpg);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align=right><a href="#">الرعاية الاجتماعية و المياه</a></h3>
                        <p align=right>مشروع صيانة وتاهيل وتوسعة المستشفي والمراكز الصحية وتدريب وتأهيل الكوادر الصحية
                            ودعمها بالمعدات الطبية والأدوية المنقذة للحياة وتكثيف حملات إصحاح البئية من مخلفات وأضرار
                            التعدين الأهلي وذلك بتوفير الآليات والمعدات الصحية لهذا المشروع
                            (حاجة المنطقة لعدد 40طلمبة غاطسة) وخمسة دوانكي.
                            مشروع إدخال الكهرباء لإنارة المنطقة والمناطق المجاورة.
                            مشروع إدخال شبكة مياه أ مبادر وتوفير مياه صالحة للشرب
                            مشروع مكافحة الجفاف والتصحر
                            مشروع معالجة قضايا الطلاب والمرأة وتوظيف الخريجين وحل مشكلة البطالة.
                            ودعم مشروع مقر المنظمة بالتصديق لها بقطعة أرض بولاية الخرطوم ومشروع زراعي بالعاصمة.
                        </p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/IMG-20191226-WA0039.jpg);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align="right"><a href="#">مجال المعادن</a></h3>
                        <p align="right">في مجمل الخطة العامة تحدثنا عن البيئة والممارسات التي يقوم بها التعدين الأهلي
                            عبر الزئبق وغيره من الغازات السامة التي تضر بصحة الإنسان والحيوان وتسعي المنظمة لعقد ورش
                            وعمل علمية لتوعية المواطنين وذلك بالتنسيق مع الجهات المختصة، وكما تسعي المنظمة في التنسيق مع
                            وزارة المعادن والسطات المحلية بالولاية والإدارية لإنشاء مشروعات صغيرة ومعامل إستخلاص للمعادن
                            مثل الذهب وغير بالمنطقة يعود ريعها لصالح مشروعات التنمية بالمنطقة</p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/image_1.jpg);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align="right"><a href="#">مجال التعليم</a></h3>
                        <p align="right">مشروع تدريب وتأهيل المعلمين وتهيئة البئية المدرسية للطالب والمعلم بدعم مشروع
                            الاجلاس والكتاب المدرسي والصحة المدرسية ومعالجة مشاكل العرب الرحل في التعليم والصحة </p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="cause-entry">
                    <a href="#" class="img" style="background-image: url(images/image_11.png);"></a>
                    <div class="text p-3 p-md-4">
                        <h3 align="right"><a href="#">الإعفاءات الجمركية</a></h3>
                        <p align="right">وفي سبيل تحقيق هذه المشاريع الكبيرة والتي تحتاج لدعم من كل الجهات الرسمية
                            والشعبية والتي تلمستها المنظمة في الفترة التي مضت وأتضح لها بأن هذه المشروعات تحتاج إلي وقفة
                            كل المجتمع بكل الوان طيفه وهي مشروعات طموحة وتحقيقها يؤدي إلي إستقرار المنطقة خاصة وأنها في
                            حدود مفتوحة مع دارفور ولقد تاثر إنسان المنطقة من عوامل مناخية وطبيعية وبشرية ترتب عليها
                            سلبيات كثيرة تسعي المنظمة مع الجهات المختصة لحلها وتحويلها من مظاهر سالبة إلي مظاهر موجبة
                            ولهذا فإن هذه المشروعات تحتاج لوسائل ومعينات كثيرة من ضمنها الإعفاءات الجمركية. </p>
                        <span class="donation-time mb-3 d-block"></span>
                        <div class="progress custom-progress-success">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>

                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--END Goals -->
@endsection
