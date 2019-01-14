@extends('layouts.default')

@section('title', 'Add Client')
@section('stylesheet')
    <link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/summernote/css/summernote.css')}}">

@endsection
@section('content')
    <form action="{{route('client')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" value="{{$data->client->id}}" name="id">
        <input type="hidden" value="{{$data->food->id}}" name="food_time_id">
        <div id="rootwizard" class="m-t-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" href="#tab1" data-target="#tab1" role="tab"><i class="fa fa-user tab-icon"></i> <span>Basic Details</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab2" data-target="#tab2" role="tab"><i class="fa fa-cutlery tab-icon"></i> <span>Food & Time</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab4" data-target="#tab4" role="tab"><i class="fa fa-clock-o tab-icon"></i> <span>Finish</span></a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                    <div class="row">
                        <div class="col-3">
                            <div class="m-l-30">
                                <div class="form-group form-group-default  form-group-default-selectFx">
                                    <label>Type</label>
                                    <select value="{{$data->client->client_type}}" name="client_type" class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select">
                                        <option value="Client" {{$data->client->client_type == 'Client' ? 'selected' : '' }}>Client</option>
                                        <option value="Lead" {{$data->client->client_type == 'Lead' ? 'selected' : '' }}>Lead</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-same-height">
                        <div class="col-md-6 b-r b-dashed b-grey sm-b-b">
                            <div class="padding-30 sm-padding-5 sm-m-t-15 ">
                                <div class="">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default ">
                                                <label>First name</label>
                                                <input value="{{$data->client->first_name}}" name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Last name</label>
                                                <input value="{{$data->client->last_name}}" name="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-group-default ">
                                                <label>Email</label>
                                                <input value="{{$data->client->email}}" name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default input-group">

                                                <div class="form-input-group flex-1">
                                                    <label>Mobile Number</label>
                                                    <input value="{{$data->client->mobile}}" type="number" name="mobile" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-input-group form-group-default ">
                                                <label>Date of Birth</label>
                                                <div id="myDatepicker" class="input-group date">
                                                    <input value="{{$data->client->dob}}" type="text" name="dob" class="form-control">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                                                        </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="padding-30 sm-padding-5">
                                <div class="">
                                    <div class="form-group form-group-default ">
                                        <label>Address</label>
                                        <input type="text" value="{{$data->client->address}}" name="address" class="form-control" placeholder="Current address">
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>City</label>
                                                <input value="{{$data->client->city}}" type="text" name="city" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default ">
                                                <label>State/Province</label>
                                                <input value="{{$data->client->state}}" type="text"  name="state" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">

                                        <div class="col-4">
                                            <div class="form-group form-group-default">
                                                <label>Pin code</label>
                                                <input value="{{$data->client->zipcode}}" type="text"  name="zipcode" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
                    <div class="row row-same-height">

                        <div class="col-md-6 b-r b-dashed b-grey sm-b-b">
                            <div class="padding-30 sm-padding-5">
                                <div class="">
                                    <p>Details on Time</p>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Breakfast</label>
                                                <input value="{{$data->food->breakfast}}" type="text" name="breakfast" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Breakfast Time</label>
                                                <input value="{{$data->food->breakfast_time}}" id="timepicker1" name="breakfast_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- <div class="col-4">
                                            <div class="input-group bootstrap-timepicker">
                                                <input id="timepicker2" type="text" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="pg-clock"></i></span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Lunch</label>
                                                <input value="{{$data->food->lunch}}" type="text" name="lunch" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Lunch Time</label>
                                                <input value="{{$data->food->lunch_time}}" id="timepicker2" name="lunch_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Snacks</label>
                                                <input value="{{$data->food->snacks}}" type="text" name="snacks" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Snacks Time</label>
                                                <input value="{{$data->food->snacks_time}}" id="timepicker3" name="snacks_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Dinner</label>
                                                <input value="{{$data->food->dinner}}" type="text" name="dinner" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Dinner Time</label>
                                                <input value="{{$data->food->dinner_time}}" id="timepicker4" name="dinner_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Most Hungry Time</label>
                                                <input value="{{$data->food->hungry_time}}" id="timepicker5" name="hungry_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Most Tired Time</label>
                                                <input value="{{$data->food->tired_time}}" id="timepicker6" name="tired_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                                <br>



                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="padding-30 sm-padding-5">

                                <p>Details on Food</p>
                                <div class="">
                                    <div class="row clearfix">
                                        <div class="col-6">
                                            <div class="form-group form-group-default form-group-default-select2 ">
                                                <label class="">Food Type</label>
                                                <select value="{{$data->food->food_type}}" name="food_type" class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                                    <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                    <option value='Veg'>Veg</option>
                                                    <option value='Non-Veg'>Non-Veg</option>
                                                    <!-- </optgroup> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Favourite Snacks</label>
                                                <input value="{{$data->food->fav_snacks}}" type="text" name="fav_snacks" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default form-group-default-select2">
                                                <label>Drinks</label>
                                                <select value="{{$data->food->drinks }}" name="drinks[]" class=" full-width" data-init-plugin="select2" multiple>
                                                    <option value="Tea">Tea</option>
                                                    <option value="Coffee">Coffee</option>
                                                    <option value="Alcohol">Alcohol</option>
                                                    <option value="Soft Drink">Soft Drink</option>
                                                    <option value="Milk">Milk</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default input-group">
                                                <div class="form-input-group">
                                                    <label>Water Intake</label>
                                                    <input value="{{$data->food->water}}" type="number" name="water" class="form-control">
                                                </div>
                                                <div class="input-group-append ">
                                                                    <span class="input-group-text">Liter
                                                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input value="{{$data->food->is_smoking}}" type="checkbox" name="is_smoking" value="1" id="smoking">
                                                    <label for="smoking">Smoking</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_appetite" type="checkbox" value="1" @if($data->food->is_appetite) checked @endif id="appetite">
                                                    <label for="appetite">Appetite</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_digestion" type="checkbox" @if($data->food->is_digestion) checked @endif value="1" id="digestion">
                                                    <label for="digestion">Digestion</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_acidity" @if($data->food->is_acidity) checked @endif type="checkbox" value="1" id="acidity">
                                                    <label for="acidity">Acidity</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_medication" @if($data->food->is_medication) checked @endif type="checkbox" value="1" id="medication">
                                                    <label for="medication">Medication</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_high_bp" @if($data->food->is_high_bp) checked @endif type="checkbox" value="1" id="highBP">
                                                    <label for="highBP">High BP</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_low_bp" @if($data->food->is_low_bp) checked @endif type="checkbox" value="1" id="LowBP">
                                                    <label for="LowBP">Low BP</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                    <div class="row row-same-height">
                        <div class="col-md-6 b-r b-dashed b-grey ">
                            <div class="padding-30 sm-padding-5 sm-m-t-15">
                                <div class="">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Work Hours</label>
                                                <input value="{{$data->client->working_hours}}" name="working_hours" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Best Time of Call</label>
                                                <input value="{{$data->client->time_to_call}}" type="text" name="time_to_call" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input value="{{$data->client->is_exercising}}" name="is_exercising" type="checkbox" value="1" id="currentlyExercising">
                                                    <label  for="currentlyExercising">Currently Exercising</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>What Exercise Program?</label>
                                                <input value="{{$data->client->exercises}}" name="exercises" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Body Check Up</label>
                                                <input value="{{$data->client->body_checkup}}" name="body_checkup" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Advance</label>
                                                <input value="{{$data->client->advance}}" name="advance" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Balance</label>
                                                <input value="{{$data->client->balance}}" name="balance" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Total</label>
                                                <input value="{{$data->client->total}}" name="total" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="padding-30 sm-padding-5">
                                <textarea  id="summernote" name="diet_schedule">{!!     $data->client->diet_schedule !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
                    <ul class="pager wizard no-style">
                        <li class="next">
                            <button class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-right" type="button">
                                <span>Next</span>
                            </button>
                        </li>
                        <li class="next finish hidden">
                            <input class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="submit" value="Finish">
                        </li>
                        <li class="previous first hidden">
                            <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                                <span>First</span>
                            </button>
                        </li>
                        <li class="previous">
                            <button class="btn btn-default btn-cons pull-right" type="button">
                                <span>Previous</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="wizard-footer padding-20 bg-master-light">
                    <!-- <p class="small hint-text pull-left no-margin">
                        The Top Content Is Soley Created using pages UI Elements such as Invoice, Tabs, Form Layouts etc. and are prior for representation Purpose Only.
                    </p> -->
                    <div class="pull-right">
                        <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script type="text/javascript" src="assets/plugins/summernote/js/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.date').datepicker({
                format: 'dd/mm/yyyy'
            });
        });
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']],

            ],
            height:250
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


