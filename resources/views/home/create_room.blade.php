@extends('layout.master')

@section('title','Create Room')

    @section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" action="<?php echo $cp_base_url;?>create_room.php" method="POST" novalidate>
                                <span class="section">Create Room </span>

                                <!-- Room Name Form Sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Room Name<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="name" class="form-control col-md-12 col-sm-3 col-xs-12" name="name" placeholder="Enter Room Name"  value= " <?php echo $occupancy; ?>"/>
                                    </div>
                                </div>

                                <!-- Room Type Form Sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room-type">Room Type<span class="nubmer">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <select id="room-type" class="form-control" name="type">
                                                    <option value="">  Choose option</option>

                                                    <option value="1"
                                                    <?php if ( $room_type == '1')
                                                    {
                                                        echo"selected";
                                                    }?>
                                                    > Standard</option>
                                                    <option value="2"
                                                    <?php if ($room_type == '2')
                                                    {
                                                        echo"selected";
                                                    }?>
                                                    > Club Floor</option>
                                                    <option value="3"
                                                    <?php if($room_type == '3')
                                                    {
                                                        echo"selected";
                                                    }?>
                                                    > Suite</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Room Occupancy Form Sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupancy">Room Occupancy<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="occupancy" type="number" class="form-control " name="occupancy" value= " <?php echo $occupancy; ?>" />
                                    </div>
                                </div>

                                <!-- Room Size Form Sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="size">Room size<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="size" type = "nubmer" class="form-control" name="size" placeholder="Enter Room Size" value="<?php echo $size; ?>" />
                                    </div>
                                </div>

                                <!-- Room Bed Form Sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room-bed">Room Bed<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <select id="room-bed" class="form-control" name="bed">
                                            <option value="">  Choose option</option>
                                                <?php
                                                    foreach( getRoomBed($mysqli) as $room_bed){
                                                    ?>
                                                    <option value=" <?php echo $room_bed['id'] ?> "
                                                    <?php if($bed == $room_bed['id'] ) {
                                                        echo "selected";
                                                        } ?>>
                                                <?php echo $room_bed['name']; ?>
                                            </option>
                                                <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Choose Option form sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room-view">Room View<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <select id="room-view" class="form-control" name="view">
                                        <option value="">  Choose option</option>
                                            <?php
                                                foreach ( getRoomView($mysqli) as $room_view){
                                            ?>
                                                <option value = "<?php echo $room_view['id'] ?>"
                                                <?php
                                                if( $view == $room_view['id']){
                                                    echo "selected";
                                                }?>>
                                                    <?php echo $room_view['name']?>
                                                </option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Room-Price-Per-day -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price-per-day">Room Price Per Day<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="price-per-day" type = "nubmer" class="form-control" name="price-per-day" value="<?php echo $price_per_day ?>"/>
                                    </div>
                                </div>

                                <!-- Extra-bed Price Per Day -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Extra-Bed-Price-Per-Day">Extra Bed Price Per Day<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                                        <input id="Extra-Bed-Price-Per-Day" type ="nubmer" class="form-control" name="Extra-Bed-Price-Per-Day" value="<?php echo $extra_bed_price ?> "/>
                                    </div>
                                </div>

                            <!-- Special Features form-sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="special-feature">Special Features<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php
                                            foreach(getSpecialFeatures($mysqli) as $feature ){
                                            ?>
                                            <div class="checkbox">
                                                <?php
                                                    if(in_array($feature['id'], $db_features)) {
                                                ?>
                                                        <label>
                                                            <input type="checkbox" value="<?php echo $feature['id']?>" name="feature[]" checked>
                                                            <?php echo $feature['name']?>
                                                        </label>
                                                <?php
                                                    } else {
                                                ?>
                                                        <label>
                                                            <input type="checkbox" value="<?php echo $feature['id']?>" name="feature[]">
                                                            <?php echo $feature['name']?>
                                                        </label>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                            ?>
                                    </div>

                                </div>

                            <!-- amenity form sub -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room-amenities">Room Amenities<span class="required">*</span></label>

                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <p><strong>General</strong> </p>
                                        <?php
                                            foreach (getRoomAmenities($mysqli,1)as $g_amenity){
                                        ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="<?php echo $g_amenity['id']?>" name="amenity[]">
                                                        <?php echo $g_amenity['name']?>
                                                    </label>
                                                </div>
                                        <?php
                                            }
                                        ?>

                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <p><strong>BathRoom</strong> </p>

                                        <?php
                                            foreach (getRoomAmenities($mysqli,2)as $b_amenity){
                                        ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="<?php echo $b_amenity['id']?>" name="amenity[]">
                                                        <?php echo $b_amenity['name']?>
                                                    </label>
                                                </div>
                                        <?php
                                            }
                                        ?>

                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                        <p><strong>Others</strong> </p>

                                        <?php
                                            foreach (getRoomAmenities($mysqli,3)as $o_amenity){
                                        ?>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="<?php echo $o_amenity['id']?>" name="amenity[]"
                                                    >
                                                    <?php echo $o_amenity['name']?>
                                                </label>
                                            </div>
                                        <?php
                                            }
                                        ?>

                                    </div>

                                </div>

                                <!-- form-sub Description -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Room Description<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="description" id="description" style="width:480px;" rows="4"><?php echo $description ?></textarea>
                                        </div>
                                </div>

                                <!-- form-sub Room Details -->

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="detail">Room Detail<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="detail" id="detail" style="width:480px;" rows="4"> <?php echo $description ?></textarea>
                                        </div>
                                </div>

                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3 mt-2">
                                            <button type='submit' name="submit" class="btn btn-primary">Submit</button>
                                            <button type='reset' class="btn btn-success">Cancel</button>
                                            <input type="hidden" name="form-sub" value="1">
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
    <!-- /page content -->

    @endsection
