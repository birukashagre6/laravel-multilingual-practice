<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.home') }}</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>
    <nav>
        <a href="/lang/en">English</a> |
        <a href="/lang/am">አማርኛ</a> |
        <a href="/lang/om">Afaan Oromoo</a> |
        <a href="/lang/so">Somali</a> |
        <a href="/lang/ti">ትግርኛ</a>
    </nav>
</body>
</html>
