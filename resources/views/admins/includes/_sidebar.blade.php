<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            
            <li class="heading">
                <h3 class="uppercase">لوحة التحكم</h3>
            </li>
            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">الأدمن</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('settings.edit', 1)}}" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">الأعدادات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('scopes.index')}}" class="nav-link nav-toggle">
                    <i class="icon-wallet"></i>
                    <span class="title">المجالات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('projects.index')}}" class="nav-link nav-toggle">
                    <i class="icon-paper-plane"></i>
                    <span class="title">المشاريع</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('goals.index')}}" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">الأهداف</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('pics.index')}}" class="nav-link nav-toggle">
                    <i class="icon-notebook"></i>
                    <span class="title">الصور</span>
                </a>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
