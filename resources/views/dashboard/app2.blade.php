<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.head')

<body class="layout-boxed">
    @include('dashboard.partials.loader')

    @include('dashboard.partials.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN CONTENT AREA  -->
        @include('dashboard.partials.sidebar')
        {{-- <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="p-0 middle-content container-xxl"> --}}
                    @yield('content2')
                    {{--
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END MAIN CONTAINER -->

    @include('dashboard.partials.scripts')

</body>

</html>
