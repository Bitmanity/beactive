@extends('layouts.default')

@section('title', 'Add Client')
@section('stylesheet')
    <link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/summernote/css/summernote.css')}}">

@endsection
@section('content')
    <form action="{{route('client')}}" method="post">
        {{csrf_field()}}
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
                <a class="" data-toggle="tab" href="#tab3" data-target="#tab3" role="tab"><i class="fa fa-info tab-icon"></i> <span>Body Info</span></a>
            </li>
            <li class="nav-item">
                <a class="" data-toggle="tab" href="#tab4" data-target="#tab4" role="tab"><i class="fa fa-clock-o tab-icon"></i> <span>Finish</span></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                <div class="row row-same-height">
                    <div class="col-md-6 b-r b-dashed b-grey sm-b-b">
                        <div class="padding-30 sm-padding-5 sm-m-t-15 ">
                                <div class="">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default ">
                                                <label>First name</label>
                                                <input name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Last name</label>
                                                <input name="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-group-default ">
                                                <label>Email</label>
                                                <input name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default input-group">
                                                <div class="cs-input-group-addon input-group-addon d-flex">
                                                    <select class="cs-select cs-skin-slide cs-transparent" data-init-plugin="cs-select">
                                                        <option data-countryCode="IN" value="91" Selected>India (+91)</option>
                                                    </select>
                                                </div>
                                                <div class="form-input-group flex-1">
                                                    <label>Mobile Number</label>
                                                    <input type="number" name="mobile" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-input-group form-group-default ">
                                                <label>Date of Birth</label>
                                                <div id="myDatepicker" class="input-group date">
                                                    <input type="text" name="dob" class="form-control">
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
                                        <input type="text" name="address" class="form-control" placeholder="Current address">
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default  form-group-default-selectFx">
                                                <label>Country</label>
                                                <select class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select">
                                                    <option data-countryCode="IN" value="91" Selected>India (+91)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-8">
                                            <div class="form-group form-group-default ">
                                                <label>State/Province</label>
                                                <input type="text"  name="state" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default">
                                                <label>Pin code</label>
                                                <input type="text"  name="zipcode" class="form-control">
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
                                                <input type="text" name="breakfast" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Breakfast Time</label>
                                                <input id="timepicker1" name="breakfast_time" type="text" class="form-control">
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
                                                <input type="text" name="lunch" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Lunch Time</label>
                                                <input id="timepicker2" name="lunch_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Snacks</label>
                                                <input type="text" name="snacks" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Snacks Time</label>
                                                <input id="timepicker3" name="snacks_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group form-group-default">
                                                <label>Dinner</label>
                                                <input type="text" name="dinner" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Dinner Time</label>
                                                <input id="timepicker4" name="dinner_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Most Hungry Time</label>
                                                <input id="timepicker5" name="hungry_time" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                <label>Most Tired Time</label>
                                                <input id="timepicker6" name="tired_time" type="text" class="form-control">
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
                                                <label class="">Favourite Food</label>
                                                <select name="food_type" class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                                    <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                    <option value=1>Only Veg </option>
                                                    <option value=2>Only Non-Veg</option>
                                                    <option value=3>Veg & Non-Veg</option>
                                                    <!-- </optgroup> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Favourite Snacks</label>
                                                <input type="text" name="fav_snacks" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default form-group-default-select2">
                                                <label>Drinks</label>
                                                <select name="drinks[]" class=" full-width" data-init-plugin="select2" multiple>
                                                    <option value="tea">Tea</option>
                                                    <option value="coffee">Coffee</option>
                                                    <option value="alcohol">Alcohol</option>
                                                    <option value="softDrink">Soft Drink</option>
                                                    <option value="milk">Milk</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default input-group">
                                                <div class="form-input-group">
                                                    <label>Water Intake</label>
                                                    <input type="number" name="water" class="form-control">
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
                                                    <input type="checkbox" name="is_smocking" value="1" id="smoking">
                                                    <label for="smoking">Smoking</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_appetite" type="checkbox" value="1" id="appetite">
                                                    <label for="appetite">Appetite</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_digestion" type="checkbox" value="1" id="digestion">
                                                    <label for="digestion">Digestion</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_acidity" type="checkbox" value="1" id="acidity">
                                                    <label for="acidity">Acidity</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_medication" type="checkbox" value="1" id="medication">
                                                    <label for="medication">Medication</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_high_bp" type="checkbox" value="1" id="highBP">
                                                    <label for="highBP">High BP</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox check-primary">
                                                    <input name="is_low_bp" type="checkbox" value="1" id="LowBP">
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
            <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
                <div class="row row-same-height">
                    <div class="col-md-6 b-r b-dashed b-grey ">
                        <div class="padding-30 sm-padding-5 ">
                            <p>Info Related to Body</p>
                            <div class="row clearfix">
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>Height</label>
                                        <input type="text" name="height" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>Weight</label>
                                        <input type="text" name="weight" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>Fat</label>
                                        <input type="text" name="fat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>Body Age</label>
                                        <input type="text" name="body_age" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>BMI</label>
                                        <input type="text" name="bmi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>BMR</label>
                                        <input type="text" name="bmr" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default">
                                        <label>V Fat</label>
                                        <input type="text" name="vfat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2">
                                        <label class="">Energy Level</label>
                                        <select name="energy" class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                            <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                            <option value="low">Low </option>
                                            <option value="medium">Medium</option>
                                            <option value="high">High</option>
                                            <!-- </optgroup> -->
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="padding-30 sm-padding-5">
                                <div class="">
                                    <p>Details on Fat in Body</p>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Whole Body Sub Fat</label>
                                                <input name="body_sub_fat" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Whole Body Ske Muscle</label>
                                                <input name="body_ske_muscle" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Arm Sub Fat</label>
                                                <input name="arm_sub_fat" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Arm Ske Muscle</label>
                                                <input name="arm_ske_muscle" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Trun Sub Fat</label>
                                                <input name="trun_sub_fat" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Trun Ske Muscle</label>
                                                <input name="trun_ske_muscle" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Leg Sub Fat</label>
                                                <input name="leg_sub_fat" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group form-group-default">
                                                <label>Leg Ske Muscle</label>
                                                <input name="leg_ske_muscle" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                <div class="row row-same-height">
                    <div class="col-md-6 b-r b-dashed b-grey ">
                        <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                            <div class="">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Work Hours</label>
                                            <input name="working_hours" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Best Time of Call</label>
                                            <input type="text" name="time_to_call" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="checkbox check-primary">
                                                <input name="is_exercising" type="checkbox" value="1" id="currentlyExercising">
                                                <label for="currentlyExercising">Currently Exercising</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>What Exercise Program?</label>
                                            <input name="exercises" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Body Check Up</label>
                                            <input name="body_checkup" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Advance</label>
                                            <input name="advance" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Balance</label>
                                            <input name="balance" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-group-default">
                                            <label>Total</label>
                                            <input name="total" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="padding-30 sm-padding-5">
                            <textarea id="summernote" name="diet_schedule">Diet Plan</textarea>
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