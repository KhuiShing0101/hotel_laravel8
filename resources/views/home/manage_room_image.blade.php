@extends('layouts.master')

    @section('title','Manage Room Image')

    @section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <h1 style="font-size:20px;">Manage Hotel Room Image </h1>

                                <!-- Action -->

                        <form class="" action="<?php echo $cp_base_url;?>manage_room_image.php?id=<?php echo $room_id; ?>" method="POST" enctype="multipart/form-data" novalidate>

                                <!-- START DATA INSERT FROM DATA BASE ( LOOPING ) -->

                            <?php

                            $room_gallery       = getRoomGalleryByRoomId($mysqli,$room_id);
                            $res_gallery_row    = $room_gallery->num_rows;

                            if( $res_gallery_row >=1 )
                            {
                            ?>
                                <div class="row">
                                    <div class="field item form-group">
                                        <div class="col-md-6 col-sm-6" ;>
                                            <div class="row">
                                        <?php
                                            $count = 0;
                                            while ($row_gallery          = $room_gallery->fetch_array())

                                            $count++;
                                            $is_thumb                       = ($count == 1) ? 'yes' : 'no';
                                            {
                                                    $gallery_id             = (int)($row_gallery['id']);
                                                    $room_image_name        = htmlspecialchars($row_gallery['image_name']);
                                                    $room_image_full_path   = $base_url . $image_path .$room_id . "/" . $room_image_name;
                                                    $edit_url               = $cp_base_url . "edit_room_image.php?rid=" . $room_id . "&id=" . $gallery_id . "&thumb=" . $is_thumb;
                                                    $delete_url             = $cp_base_url . "manage_room_image_delete.php?rid=" .$room_id . "&id=" . $gallery_id;
                                        ?>
                                                    <div class="col-md-3 col-sm-3">
                                                        <img src="<?php echo $room_image_full_path;?>" class="preview_image"/>
                                                        <div>
                                                            <a href="<?php echo $edit_url; ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                            <?php
                                                            if($count != 1)
                                                            {
                                                            ?>
                                                                <a href="<?php echo $delete_url; ?>" class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</a>
                                                            <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                            <?php
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                             <!--  /DATA INSERT FROM DATA BASE ( LOOPING ) -->

                            <!-- START CHOOSE FILE AND PREVIEW   -->

                            <div class="row">
                                <div class="field item form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="drag-area">
                                            <div class="file-browse">
                                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                <header>Drag & Drop to Upload File</header>
                                                <span>OR</span>
                                                <label class="input-file">
                                                    Choose File <input type="file" name="file" id="fileInput"
                                                        onChange="chooseFile()">
                                                </label>
                                            </div>
                                            <div class="show-img-preview">
                                                <img src="" class="preview-image" onclick="browse()" />
                                            </div>
                                        </div>

                                                <!-- /CHOOSE FILE AND PREVIEW -->

                                                <!-- upload and Clear btn -->

                                        <div id="upload-btn" class="field form-group upload-btn">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                                <button type="button" class="btn btn-danger" onclick="clearFile()">Clear</button>
                                                <input type="hidden" name="form-sub" value="1" />
                                                <input type="hidden" name="room-id" value="<?php echo $room_id; ?>" />
                                                <input type="hidden" name="gallery-id" value="<?php echo $gallery_id; ?>" />
                                            </div>
                                        </div>
                                    </div class="clearfix">
                                </div>
                            </div>
                        </form>
                            <!-- /endAction -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
