@include('website.partials.head-links')
@include('website.partials.navabar')

<body>
    @yield('content')

    @include('website.partials.contact-form')
    @include('website.partials.footer')
</body>

@include('website.partials.scripts')
