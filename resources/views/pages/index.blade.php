@extends('layouts.default')
@section('title', 'Dashboard')

@section('content')
    <div class="card card-transparent">
        <div class="card-body">
            <div class="row">

                <div class="col-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold">Total Entries</h4>
                            <h3>50</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold">Total Client</h4>
                            <h3>41</h3>
                        </div>
                    </div>

                </div>
                <div class="col-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold">Total Appt</h4>
                            <h3>41 <span class="hint-text h6">this week</span></h3>
                        </div>
                    </div>

                </div>
                <div class="col-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold">Pending Appt</h4>
                            <h3>41 <span class="hint-text h6">this week</span></h3>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <h4 class="bold">Today's Scheduled Meet</h4>
                                </div>
                                <div class="row d-flex flex-row">
                                    <p class="bold">Jatin Santosh Parmar </p>
                                    <span class="ml-1 mr-1">at</span>
                                    <p class="hint-text">4:30 PM</p>
                                </div>
                                <div class="row d-flex flex-row">
                                    <p class="bold">Rehman Deraiya </p>
                                    <span class="ml-1 mr-1">at</span>
                                    <p class="hint-text">5:30 PM</p>
                                </div>
                                <div class="row d-flex flex-row">
                                    <p class="bold">Pratik Kawalkar </p>
                                    <span class="ml-1 mr-1">at</span>
                                    <p class="hint-text">6:30 PM</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
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
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>

    <script>
        $('#timepicker2').timepicker({
            defaultTime: '01:15 PM'
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker3').timepicker({
            defaultTime: '05:30 PM'
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker4').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker5').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>
    <script>
        $('#timepicker6').timepicker({
            defaultTime: '10:00 PM'
        }).on('show.timepicker', function(e) {
            var widget = $('.bootstrap-timepicker-widget');
            widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
            widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
        });
    </script>

@endsection