@extends('layouts.master')

    @section('title','Show Room')

    @section(''content)

    <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Hotel Room Listing</h3>
            </div>
        </div>

        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">Id </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Type </th>
                                        <th class="column-title">Occupancy</th>
                                        <th class="column-title">Bed </th>
                                        <th class="column-title">Size </th>
                                        <th class="column-title">View </th>
                                        <th class="column-title">Price </th>
                                        <th class="column-title">Extra_bed_price </th>
                                        <th class="column-title">Action </th>

                                    </tr>
                                    <th class="bulk-actions" colspan="12">
                                            <a class="antoo" style="color:#fff; font-weight:500;">table records ( <span class="action-cnt"> </span> )</a>
                                    </th>
                                </thead>

                                <tbody>

                                <?php
                                    if ($res_row>=1)
                                    {
                                        while ($row=$result->fetch_array())
                                        {
                                            $id                    =   (int)($row['id']);
                                            $name                  =   htmlspecialchars($row['name']);
                                            $db_type               =   (int)($row['id']);
                                                    switch($db_type){
                                                        case "1":
                                                            $room_type ="standard";
                                                        break;
                                                        case "2":
                                                            $room_type ="club floor";
                                                        case "3":
                                                            $room_type ="suite";
                                                        default;
                                                            $room_type ="";
                                                    break;
                                                    }

                                                $occupancy         = (int) ($row ['occupancy']);
                                                $size              = (int) ($row ['size']);
                                                $price             = (int) ($row ['price_per_day']);
                                                $extra_bed_price   = (int) ($row ['extra_bed_price_per_day']);
                                                $bed_name = ($row['bed_name'] != '') ? htmlspecialchars($row['bed_name']) : '';
                                                $view_name = ($row['view_name'] != '') ? htmlspecialchars($row['view_name']) : '';


                                                $edit_url = $cp_base_url . "edit_room.php?id=" . $id;
                                                $edit_photo_url = $cp_base_url . "manage_room_image.php?id=" . $id;
                                                $delete_url= $cp_base_url ."delete_room.php?id=" . $id;

                                            ?>

                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" "><?php echo $id; ?></td>
                                                <td class=" "><?php echo $name; ?></td>
                                                <td class=" "><?php echo $room_type; ?></td>
                                                <td class=" "><?php echo $occupancy. " ". $measurement['occupancy']; ?></td>
                                                <td class=" "><?php echo $bed_name; ?></td>
                                                <td class=" "><?php echo $size. " ". $measurement['size']; ?></td>
                                                <td class=" "><?php echo $view_name ; ?></td>
                                                <td class=" "><?php echo $price. " " . $measurement['price']; ?></td>
                                                <td class=" "><?php echo $extra_bed_price; ?></td>
                                                <td class=" ">
                                                    <a href="<?php echo $edit_url; ?>" class="btn btn-info btn-sm">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                    <a href="<?php echo $edit_photo_url; ?>" class= "btn btn-secondary btn-sm">
                                                        <i class="fa fa-file-image-o">
                                                            Edit Photo
                                                        </i>
                                                    </a>
                                                    <a href="<?php   $delete_url; ?>" class= "btn btn-danger btn-sm">
                                                        <i class="fa fa-trash">
                                                            Delete
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection
