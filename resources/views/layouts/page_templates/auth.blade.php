<div class="wrapper">

    @include('layouts.navbars.auth')

    <div class="main-panel">
        @include('layouts.navbars.navs.auth')
        <div class="content">
            @include('layouts.elements.validator')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</div>