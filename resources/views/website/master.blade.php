@include('website.partials.head-links')

<body>
    @include('website.partials.navabar')
    
    @yield('content')

    @include('website.partials.contact-form')
    @include('website.partials.footer')
    
    @include('website.partials.scripts')
</body>
</html>
