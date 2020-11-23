<?php
$controllerName = '';

$controller = '';
$action = 'index';

switch ($controller) {
    case 'users':
        $controllerName = 'Usuários';
        $routeName = lcfirst($controller);
        break;

    case 'Relatorios':
        $controllerName = ucfirst($controller);
        $routeName = 'admin.dashboard';
        break;

    default:
        $controllerName = ucfirst($controller);
        $routeName = lcfirst($controller);
        break;
}
?>
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a class="link-out" href="{{ route('admin.dashboard.index') }}">{{ env('APP_NAME') }}</a></li>
    @if($action == 'index')
        <li class="breadcrumb-item active">{{ $controllerName }}</li>
    @else
        <li class="breadcrumb-item"><a class="link-out" href="{{ route('admin.'.lcfirst($routeName) . '.index') }}">{{ ucfirst($controllerName) }}</a></li>
        <li class="breadcrumb-item active">@yield('h1')</li>
    @endif
</ol>