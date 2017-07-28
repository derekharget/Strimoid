<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{ trans('auth.account registration') }}</h2>

<div>
    <p>Witaj {!! $user->_id !!}!</p>
    <p>{{ trans('auth.link below') }}</p>
    <p>
        <a href="{!! URL::to('account/activate', $user->activation_token) !!}">{!! URL::to('account/activate', [$user->activation_token]) !!}</a>
    </p>
</div>

<div itemscope itemtype="http://schema.org/EmailMessage">
    <meta itemprop="description" content="Aktywuj konto w serwisie Strimoid.pl"/>
    <div itemprop="action" itemscope itemtype="http://schema.org/ViewAction">
        <link itemprop="url" href="{!! URL::to('account/activate', [$user->activation_token]) !!}"/>
        <meta itemprop="name" content="Aktywuj konto"/>
    </div>
</div>

</body>
</html>
