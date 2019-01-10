@extends('layouts.default')

@section('title', 'View Client')

@section('content')
    <div class="card card-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bold">Client List</h3>
                    <div class="container-fixed-lg bg-white">
                        <!-- START card -->
                        <div class="card card-transparent">
                            <div class="card-header m-b-20">
                                <div class="pull-center">
                                    <div class="col-lg-12">
                                        <input type="text" id="search-table" class="form-control pull-right" placeholder="Search" style="background-color: #e7e7e7;">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                                    <thead>
                                    <tr>
                                        <th>Client UID</th>
                                        <th>Client Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>01-2018</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>Rehman Deraiya</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>+91-92267-14345</p>
                                        </td>
                                        <td>
                                            <p>rehmanity@gmail.com</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <ul class="d-lg-inline-block d-none notification-list no-margin  no-style">
                                                <li class="p-r-10 inline">

                                                </li>
                                                <li class="p-r-10 inline">
                                                    <a href="#" class="header-icon fa fa-edit"></a>
                                                </li>
                                                <li class="p-r-10 inline">
                                                    <a href="#" class="header-icon fa fa-trash-o"></a>
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
        $(document).ready(function() {
            $('#myDatepicker').datepicker();
            $('#tableWithSearch').DataTable({
                "sDom": "<'table-responsive't><'row'<p i>>",
                "sPaginationType": "bootstrap",
                "destroy": true,
                "scrollCollapse": true,
                "oLanguage": {
                    "sLengthMenu": "_MENU_ ",
                    "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
                },
                "iDisplayLength": 10,
                "deferRender": true,
                ajax: {
                    url: '{{route('client_list')}}',
                    dataSrc: ''
                },
                columns: [
                    {data: 'id'},
                    {data: concat},
                    {data: 'mobile'},
                    {data: 'email'},
                    {
                        data: 'id',
                        render: function (data,row,type) {
                            return "<ul class=\"d-lg-inline-block d-none notification-list no-margin  no-style\">\n" +
                                "                                                <li class=\"p-r-10 inline\">\n" +
                                "                                                    <a href=\"{{url('client_detail')}}/"+data+"\" class=\"header-icon fa fa-eye\"></a>\n" +
                                "                                                </li>\n" +
                                "                                                <li class=\"p-r-10 inline\">\n" +
                                "                                                    <a href=\"#\" class=\"header-icon fa fa-edit\"></a>\n" +
                                "                                                </li>\n" +
                                "                                                <li class=\"p-r-10 inline\">\n" +
                                "                                                    <a href=\"#\" class=\"header-icon fa fa-trash-o\"></a>\n" +
                                "                                                </li>\n" +
                                "                                            </ul>"
                        }
                    }
                ]
            });
        });
        function concat(data,type,dataToSet) {
            return data.first_name + ' '+data.last_name;
        }
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