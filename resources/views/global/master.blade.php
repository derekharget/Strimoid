<!DOCTYPE html>
<html lang="pl">
<head>
    @include('global.parts.head')
</head>

<body class="@if (isset($_COOKIE['night_mode'])) night @endif">

<?php

$currentRoute = Route::currentRouteName() ?: '';
$navbarClass = (auth()->check() && @user()->settings['pin_navbar']) ? 'fixed-top' : 'static-top';

?>

@include('global.parts.groupbar')
@include('global.parts.navbar')

<div class="container @if (@user()->settings['pin_navbar']) navbar-fixed-margin @endif">
    <div class="row">
        <div class="main_col @yield('content_class', 'col-md-8')">
            @react_component('Test', ['name' => 'World'])
            
            @include('flash::message')
            @include('global.parts.alerts')

            @yield('content')
        </div>

        <aside class="@yield('sidebar_class', 'col-md-4') sidebar">
            @yield('sidebar')
        </aside>
    </div>
</div>

<footer>
    @include('global.parts.footer')
</footer>

@if (auth()->guest())
    @include('auth.login-modal')
@endif

<script src="{{ elixir('assets/js/laroute.js') }}"></script>
<script src="{{ elixir('assets/js/lodash.js') }}"></script>
<script src="{{ elixir('assets/js/all.js') }}"></script>
<script src="/js/client.bundle.js"></script>
<script src="{{ asset('vendor/react-laravel/react_ujs.js') }}"></script>

@if (auth()->check())
<script>
    window.username = '{!! Auth::id()  !!}';
    window.settings = {!! json_encode(user()->settings) !!};
    window.observed_users = {!! json_encode((array) user()->followedUsers()->pluck('name')) !!};
    window.blocked_users = {!! json_encode(user()->blockedUsers()->pluck('name')) !!};
    window.blocked_groups = {!! json_encode(user()->blockedGroups()->pluck('urlname')) !!};
    window.subscribed_groups = {!! json_encode(user()->subscribedGroups()->pluck('urlname')) !!};
    window.moderated_groups = {!! json_encode(user()->moderatedGroups()->pluck('urlname')) !!};

    @if (isset($groupURLName) && $groupURLName)
        window.group = '{{{ $groupURLName }}}';
    @endif
</script>
@endif

@yield('scripts')

@if (!config('app.debug'))
    @if (config('services.piwik.host') && config('services.piwik.site_id'))
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="{{ config('services.piwik.host') }}";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', {{ (int) config('services.piwik.site_id') }}]);
                var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];
                g.type='text/javascript';g.async=true;g.defer=true;g.src=u+'piwik.js';s.parentNode.insertBefore(g,s)
            })();
        </script>
        <noscript><p><img src="{{ config('services.piwik.host') }}piwik.php?idsite=1" style="border:0"></p></noscript>
    @endif

    @if (config('services.raven.public_dsn'))
        <script src="//cdn.ravenjs.com/3.7.0/console/raven.min.js"></script>
        <script>
            Raven.config('{{ config('services.raven.public_dsn') }}').install()
        </script>
    @endif
@endif

<script>
    $(document).pjax('body > .container a', 'body > .container')
    $(document).on('pjax:end', function() {
        riot.mount('*')
    })

    riot.mount('*')
</script>

</body>
</html>
