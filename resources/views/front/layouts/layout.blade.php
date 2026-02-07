<!DOCTYPE html>
<html lang="zxx">

    @include("front.fixed.head")

    @hasSection('style')
        @yield('style')
    @endif

    <body>

    @include("front.fixed.preloader")

    @include("front.fixed.header")

    @if (!Request::is('/'))
        @include('front.fixed.page-header')
    @endif

    @yield("content")

    @include("front.fixed.footer")

    @include("front.fixed.script")

    @hasSection('script')
        @yield('script')
    @endif
</body>

</html>
