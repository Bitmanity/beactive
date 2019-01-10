@extends('layouts.default')

@section('title', 'Appointment')

@section('content')
    <div class="card card-transparent">
        <div class="card-body">
            <div class="row">
                <tr>
                    <th style="width: 10%">UID</th>
                    <th style="width: 20%">Client Name</th>
                    <th style="width: 20%">Mobile Number</th>
                    <div class="col-md-12">
                        <h3 class="bold">Appointments</h3>
                        <div class="container-fixed-lg bg-white">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header m-b-20">
                                    <div class="pull-center">
                                        <div class="col-lg-12">
                                            <input type="text" id="search-table" class="form-control pull-right"
                                                   placeholder="Search" style="background-color: #e7e7e7;">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover demo-table-search table-responsive-block"
                                           id="tableWithSearch">
                                        <thead>
                                        <th style="width: 20%">Email</th>
                                        <th style="width: 20%">Date & Time</th>
                                        <th style="width: 20%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="semi-bold v-align-middle ">
                                                <p>01-2018</p>
                                            </td>
                                            <td class="v-align-middle">
                                                <p>Rehman Deraiya</p>
                                            </td>
                                            <td class="v-align-middle">
                                                <p>+91-92267-14345</p>
                                            </td>
                                            <td class="v-align-middle">
                                                <p>rehmanity@gmail.com</p>
                                            </td>
                                            <td class="v-align-middle">
                                                12/12/2019 9:00 AM
                                            </td>
                                            <td class="v-align-middle">
                                                <ul class="d-lg-inline-block d-none notification-list no-margin  no-style">
                                                    <li class="p-r-10 inline">
                                                        <a href="client_detail.html"
                                                           class="header-icon fa fa-check-circle"></a>
                                                    </li>
                                                    <li class="p-r-10 inline">
                                                        <a href="#" class="header-icon fa fa-times-circle"></a>
                                                    </li>
                                                </ul>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#myDatepicker').datepicker();
        });
    </script>
    <!-- <script type="text/javascript">
        $('#timepicker1').timepicker();
    </script>
    <script type="text/javascript">
        $('#timepicker2').timepicker();
    </script> -->
    <script>
        $('#timepicker1').timepicker({
            defaultTime: '08:45 AM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>

    <script>
        $('#timepicker2').timepicker({
            defaultTime: '01:15 PM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker3').timepicker({
            defaultTime: '05:30 PM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker4').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker5').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker6').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function (e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>

@endsection