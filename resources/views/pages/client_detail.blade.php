@extends('layouts.default')

@section('title', 'Client Detail')

@section('content')
    <div class="card card-transparent">
        <div class="card-body">
            <div class="row">
                <!-- Modal -->
                <div class="modal fade slide-up disable-scroll" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
                    <div class="modal-dialog ">
                        <div class="modal-content-wrapper">
                            <div class="modal-content">
                                <div class="modal-header clearfix text-left">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <i class="pg-close fs-14"></i>
                                    </button>
                                    <h5>Fix <span class="semi-bold">Appointment</span></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group form-input-group form-group-default ">
                                                    <label>Appointment Date</label>
                                                    <div id="myDatepicker" class="input-group date">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                                                                </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group form-group-default input-group bootstrap-timepicker">
                                                    <label>Appointment Time</label>
                                                    <input id="timepicker1" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <button class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
                <!-- /.modal-dialog -->


                <div class="col-12">
                    <div class="row">
                        <h3 class="bold">Rehman Deraiya</h3>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="p-t-15">
                                <div class="d-flex">
                                    <span class="icon-thumbnail bg-master-light pull-left text-master"><i class="fa fa-envelope-o"></i></span>

                                    <div class="flex-1 full-width overflow-ellipsis">
                                        <p class="hint-text    small no-margin overflow-ellipsis ">Email</p>
                                        <h5 class="no-margin overflow-ellipsis ">rehmanity@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-t-15">
                                <div class="d-flex">
                                    <span class="icon-thumbnail bg-master-light pull-left text-master"><i class="fa fa-phone"></i></span>
                                    <div class="flex-1 full-width overflow-ellipsis">
                                        <p class="hint-text    small no-margin overflow-ellipsis ">Mobile Number</p>
                                        <h5 class="no-margin overflow-ellipsis ">+91-92267-14345</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-t-15">
                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-master-light pull-left text-master" data-toggle="modal" data-target="#myModal">
                                                                <i class="fa fa-clock-o"></i>
                                                    </span>

                                    <div class="flex-1 full-width overflow-ellipsis">
                                        <p class="hint-text    small no-margin overflow-ellipsis ">Schedule Meet</p>
                                        <h5 class="no-margin overflow-ellipsis ">After 3 Days</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-transparent mt-5">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  justify-content-center" data-init-reponsive-tabs="dropdownfx">
                            <li class="nav-item">
                                <a href="#" class="active" data-toggle="tab" data-target="#fade1"><span>Reports</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="tab" data-target="#fade2"><span>Food & Time</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="tab" data-target="#fade3"><span>Other Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="tab" data-target="#fade4"><span>Billing & History</span></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="fade1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Detail Report</h4>
                                                    <table class="table table-condensed table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-50"><span class="fs-18 bold">Attributes</span></td>
                                                            <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">12 January 2018</span>
                                                            </td>
                                                            <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">12 February 2018</span>
                                                            </td>
                                                            <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">12 March 2018</span>
                                                            </td>
                                                            <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">12 April 2018</span>
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-condensed table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">Height</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Weight</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Body Age</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">BMI</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">BMR</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">V Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">78</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Energy Level low</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Hight</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Hight</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Hight</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Medium</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Whole Body Sub Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Whole Body SKY Muscle</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">ARM Sub Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">ARM SKE Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">TRUN Sub Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">TRUN SKE Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">LEG Sub Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">LEG SKE Fat</td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">187</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">342</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">423</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">4242</span>
                                                                </td>

                                                            </tr>



                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="fade2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Schedule Meet</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-20"><span class="fs-18 bold">Meals</span></td>
                                                            <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Food</span>
                                                            </td>
                                                            <td class=" text-left w-25 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Time</span>
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>

                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-25">Breakfast</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Idli, Sambar, vada</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">8:30 AM</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-25">Lunch</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Chiken, Mutton, Fish, Roti, Salad,Chiken, Mutton, Fish, Roti, Salad,</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">12:30 PM</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-25">Snacks</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Burger, Coke, Coffee</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">5:30 PM</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-25">Dinner</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Burger, Coke, Coffee</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">5:30 PM</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-25">Most Hungry Time</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">-</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">5:30 PM</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-25">Most Tired Time</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">-</span>
                                                                </td>
                                                                <td class=" text-right w-25 b-l b-dashed b-grey">
                                                                    <span class="fs-18">5:30 PM</span>
                                                                </td>

                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Detail On Food</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-20"><span class="fs-18 bold">Attributes</span></td>
                                                            <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Values</span>
                                                            </td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">Favourite Food</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Idli, Sambar, vada</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Lunch</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Chiken, Mutton, Fish, Roti, Salad,Chiken, Mutton, Fish, Roti, Salad,</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Drinks</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Coke, Coffee</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Water Intake</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">10 Liter</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Smokeing</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Appetite</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="fs-14 w-50">Digestion</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Acidity</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="fs-14 w-50">Medication</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">High BP</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Low BP</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fade3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Personal Detail</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-20"><span class="fs-18 bold">Attributes</span></td>
                                                            <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Values</span>
                                                            </td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">Email</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">rehmaity@gmail.com</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">DOB</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">8 October 1995</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Address</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Dahanu Road, Mumbai, Maharashtra, INDIA, Pincode - 401602</span>
                                                                </td>


                                                            </tr>




                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Work & Workout Details</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-20"><span class="fs-18 bold">Attributes</span></td>
                                                            <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Values</span>
                                                            </td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">Work Hours</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">10</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Best Time To Call</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Sunday Afternoon</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Currently Excercising</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Excercising Program</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Gym Cardio Workout</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Body Check Up</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">Yes</span>
                                                                </td>
                                                            </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fade4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Billing Detail</h4>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="fs-12 w-20"><span class="fs-18 bold">Attributes</span></td>
                                                            <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                <span class="fs-18 bold">Values</span>
                                                            </td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">Advance</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">Balance</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18">123</span>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50 bold">Total</td>
                                                                <td class=" text-left w-50 b-l b-dashed b-grey">
                                                                    <span class="fs-18 bold">675</span>
                                                                </td>


                                                            </tr>




                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <h5 class="bold mb-1">Schedule History</h4>
                                            </div>
                                            <div class="card-body ">
                                                <div class="scrollable">
                                                    <div class="demo-card-scrollable" style="max-height: 360px; min-height: 360px;">
                                                        <table class="table table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td class="fs-14 w-50">1 January 2019</td>


                                                            </tr>
                                                            <tr>
                                                                <td class="fs-14 w-50">31 December 2018</td>



                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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