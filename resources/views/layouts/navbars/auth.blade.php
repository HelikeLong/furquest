<div class="sidebar" data-active-color="danger">
    <div class="logo">
        <a href="{{ route('admin.dashboard.index') }}" class="simple-text logo-normal px-5 py-2">
            <img src="{{ asset('images/logo_white_vertical_typo.png') }}">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @isset($arrMenu)
                @foreach($arrMenu as $groupName => $menu)
                    @if(isset($menu['childs']))
                        <li class="childs {{ \Str::startsWith($elementActive['menuName'], $groupName) ? 'active' : '' }}">
                            <a data-toggle="collapse" aria-expanded="{{ \Str::startsWith($elementActive['menuName'], $groupName) ? 'true' : 'false' }}" href="#{{$groupName}}">
                                <i class="nc-icon {{ $iconMenu[$groupName] }}"></i>
                                <p>
                                    {{ __($groupName) }} <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse {{ \Str::startsWith($elementActive['menuName'], $groupName) ? 'show' : 'hide' }}" id="{{$groupName}}">
                                <ul class="nav">
                                    @foreach($menu['childs'] as $submenu)
                                        <li class="{{ \Str::startsWith($elementActive['menuName'], $submenu['name']) ? 'active' : '' }}">
                                            <a href="{{ route($submenu['route']) }}">
                                                <i class="nc-icon {{ $iconMenu[$submenu['name']] }}"></i>
                                                <p>{{ __($submenu['title']) }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="{{ \Str::startsWith($elementActive['menuName'], $menu['name']) ? 'active' : '' }}">
                            <a href="{{ route($menu['route']) }}">
                                <i class="nc-icon {{ $iconMenu[$menu['name']] }}"></i>
                                <p>{{ __($menu['title']) }}</p>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endisset
        </ul>
    </div>
</div>
