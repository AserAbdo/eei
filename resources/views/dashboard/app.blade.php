<!DOCTYPE html>
<html lang="en">
<style>
    th {
        color: #805dca !important;
        font-weight: bold !important;
    }

    .main-content {
        margin-top: 25px;
    }

    #accordionExample {
        overflow-y: hidden !important;
    }
</style>
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
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="p-0 middle-content container-xxl">
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    @include('dashboard.partials.scripts')

</body>

</html>
