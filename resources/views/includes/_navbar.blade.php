<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">أم بادر</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> القائمة
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::is('contacts')? "active":""}}"><a href="contact.html" class="nav-link">اتصل بنا</a></li>
                <li class="nav-item {{Request::is('galleries')? "active":""}}"><a href="gallery.html" class="nav-link">المعرض</a></li>
                <li class="nav-item {{Request::is('goals')? "active":""}}"><a href="causes.html" class="nav-link">اهداف</a></li>
                <li class="nav-item {{Request::is('about')? "active":""}}"><a href="about.html" class="nav-link">عن المنظمة</a></li>
                <li class="nav-item {{Request::is('/')? "active":""}}"><a href="index.html" class="nav-link">الرئيسية</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
