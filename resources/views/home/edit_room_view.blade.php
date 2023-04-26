@extends('layouts.maste')

@section('title','Edit Room View')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form class="" action="<?php echo$cp_base_url; ?>edit_room_view.php" method="post" novalidate>
                                <span class="section">Edit Room View</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="name" placeholder="eg. Lake View" required="required" value="<?php echo $name;?>" type="text"/>
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3 mt-2">
                                            <button type='submit' class="btn btn-primary">Cancel</button>
                                            <button id='send' class="btn btn-success" type="submit">Update</button>
                                            <input type="hidden" name="form-sub" value="1">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
