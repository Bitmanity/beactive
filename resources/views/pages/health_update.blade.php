@extends('layouts.default')

@section('title', 'Add Client')
@section('stylesheet')
    <style>
        .select2-selection__rendered{
            font-size: 1rem !important;
        }
    </style>

@endsection
@section('content')
    <form action="{{route('client')}}" method="post">
        {{csrf_field()}}
        <div class="row m-t-20">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header  separator">

                        <div class="row">
                            <div class="col-lg-12">

                                    <div class="form-group form-group-default form-group-default-select2">
                                        <label class="">Select Client</label>
                                        <select name="select_client" class="full-width" data-placeholder="Select Client" data-init-plugin="select2">
                                            <option value="client">Client 1 </option>
                                            <option value="client">Client 2</option>
                                            <option value="client">Client 3</option>
                                        </select>
                                    </div>

                            </div>
                        </div>



                    </div>
                    <div class="card-body">
                        <h3>
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
                                                    <input type="number" name="body_age" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-6">
                                                <div class="form-group form-group-default">
                                                    <label>BMI</label>
                                                    <input type="number" name="bmi" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group form-group-default">
                                                    <label>BMR</label>
                                                    <input type="number" name="bmr" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group form-group-default">
                                                    <label>V Fat</label>
                                                    <input type="text" name="v_fat" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group form-group-default form-group-default-select2">
                                                    <label class="">Energy Level</label>
                                                    <select name="energy" class="full-width" data-placeholder="Select Levels" data-init-plugin="select2">
                                                        <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                        <option value="low">Low</option>
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
                    <div class="card-footer">
                        <input class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-left" type="submit">
                            
                        </input>
                    </div>
                </div>

            </div>
        </div>

    </form>
@endsection

@section('script')


@endsection