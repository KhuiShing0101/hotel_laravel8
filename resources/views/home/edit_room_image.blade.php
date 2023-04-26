
    @extends('layouts.master')

    @section('title','Edit Room Image')

    @section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <h1 style="font-size:20px;">Update Hotel Room Image </h1>

                                    <!-- Action -->

                            <form class="" action="<?php echo $cp_base_url;?>manage_room_image.php?id=<?php echo $room_id; ?>" method="POST" enctype="multipart/form-data" novalidate>

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
                                                    <img src="<?php echo $room_image_full_path; ?>" class="preview-image" onclick="browse()" />
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
                                                    <input type="hidden" name="is-thumb" value="<?php echo $is_thumb; ?>" />
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
