<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') - Be Active</title>
    @include('includes.stylesheet')
    @yield('stylesheet')
</head>

<body class="fixed-header horizontal-menu horizontal-app-menu ">
<!-- START PAGE-CONTAINER -->
@include('includes.header')
<div class="page-container ">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
            <div class="bg-white">
                <div class="container">
                    <!-- <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Blank template</li>
                        </ol> -->
                </div>
            </div>
            <!-- START CONTAINER FLUID -->
            <div class=" container container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                @yield('content')
                <!-- END PLACE PAGE CONTENT HERE -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        @include('includes.footer')
        <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

<!-- BEGIN VENDOR JS -->
@include('includes.script')
@yield('script')
<!-- END PAGE LEVEL JS -->
<!-- END PAGE LEVEL JS -->
</body>

</html>