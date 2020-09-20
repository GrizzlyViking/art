<nav class="navbar navbar-fixed navbar-expand-lg bg-white">
    <div class="container position-relative">

        <!-- Navbar Toggler -->
        <div class="d-lg-none menu-toggle toggle-out" data-toggle="class" data-toggler-class-in="toggle-in" data-toggler-class-out="toggle-out" data-target="#html" data-class="navbar-open">
            <span class="hamburger"><span></span><span></span><span></span></span>
            <span class="cross"><span></span><span></span></span>
        </div>
        <!-- /Navbar Toggler -->

        <!-- Brand -->
        <a class="navbar-brand d-sm-inline-block w-auto col-lg-2" href="{{ route('landing') }}">{{ env('APP_NAME') }}</a>
        <!-- /Brand -->

        <!-- Middle -->
        <div id="navbar-fullscreen" class="navbar-nav-fullscreen">
            <ul class="navbar-nav">

                @foreach($pages->reject(function($page) { return $page->slug === 'home'; }) as $page)
                <!-- Navbar Item -->
                <li class="nav-item">
                    <a href="{{ route($page->slug) }}" class="nav-link">{{ $page->slug }}</a>
                </li>
                <!-- Navbar Item -->
                @endforeach

                <!-- Navbar Item -->
                <li class="nav-item d-lg-none">
                    <a href="#" class="nav-link" data-toggle="class" data-target="#page-search" data-class="active">
                        <i class="icon mr-2 fa fa-search"></i> Search
                    </a>
                </li>
                <!-- /Navbar Item -->

            </ul>
        </div>
        <!-- /Middle -->

        <!-- Right -->
        <ul class="navbar-nav col-lg-2 justify-content-lg-end d-none d-lg-flex">

            <!-- Navbar Item -->
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="class" data-target="#page-search" data-class="active">
                    <i class="icon fa fa-search"></i>
                </a>
            </li>
            <!-- /Navbar Item -->

        </ul>
        <!-- /Right -->

    </div>
</nav>
