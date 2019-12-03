<div class="sidebar">
    <div class="sidebar-position col-2">
        <a class="navbar-brand"> <img src="{{ asset('storage/img/carcassonne-main-logo.png') }}"></a>
        <div class="sidebar-inner">
            <ul>
                <li class="{{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}"><a href="/dashboard" class="menu-item-sidebar d-block">Dashboard</a></li>
            </ul>
            <ul class="functions-list">
                <p class="functions-title">Functies</p>
                <li class="{{ (request()->segment(1) == 'tafelindelingen') ? 'active' : '' }}"><a href="/tafelindelingen" class="menu-item-sidebar d-block">Tafelindelingen</a></li>
                <li class="{{ (request()->segment(1) == 'scores-invoeren') ? 'active' : '' }}"><a href="/scores-invoeren" class="menu-item-sidebar d-block">Scores invoeren</a></li>
                <li class="{{ (request()->segment(1) == 'deelnemers') ? 'active' : '' }}"><a href="/deelnemers" class="menu-item-sidebar d-block">Deelnemers</a></li>
                <li class="{{ (request()->segment(1) == 'juryleden') ? 'active' : '' }}"><a href="/juryleden" class="menu-item-sidebar d-block">Juryleden</a></li>
                <li class="{{ (request()->segment(1) == 'privileges') ? 'active' : '' }}"><a href="/privileges" class="menu-item-sidebar d-block">Privileges</a></li>
                <li class="{{ (request()->segment(1) == 'nieuwsfeed') ? 'active' : '' }}"><a href="/nieuwsfeed" class="menu-item-sidebar d-block">Nieuwsfeed</a></li>
            </ul>
            <ul class="settings-list">
                <p class="settings-title">Instellingen</p>
                <li class="{{ (request()->segment(1) == 'profiel-instellingen') ? 'active' : '' }}"><a href="/profiel-instellingen" class="menu-item-sidebar d-block">Profiel instellingen</a></li>
            </ul>
        </div>
    </div>
</div>




{{--<a href="/dashboard" class="menu-item-sidebar d-block">Dashboard</a>--}}
{{--<div class="functions-list">--}}
{{--    <p class="functions-title">Functies</p>--}}
{{--    <a class="menu-item-sidebar d-block">Tafelindelingen</a>--}}
{{--    <a class="menu-item-sidebar d-block">Scores invoeren</a>--}}
{{--    <a class="menu-item-sidebar d-block">Deelnemers</a>--}}
{{--    <a class="menu-item-sidebar d-block">Juryleden</a>--}}
{{--    <a class="menu-item-sidebar d-block">Privileges</a>--}}
{{--    <a class="menu-item-sidebar d-block">Nieuwsfeed</a>--}}
{{--</div>--}}
{{--<div class="settings-list">--}}
{{--    <p class="settings-title">Instellingen</p>--}}
{{--    <a class="menu-item-sidebar d-block">Profiel instellingen</a>--}}
{{--</div>--}}
