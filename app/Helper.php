<?php
    if(! function_exists('removeLastComma'))
    {
        function removeLastComma($rooms)
        {
            $data   = "";
            foreach($rooms as $room)
            {
                $data .= $room->name . ",";
            }
            $data = rtrim($data, ",");
            return $data;
        }
    }
?>
