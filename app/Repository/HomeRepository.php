<?php

namespace App\Repository;

use App\Models\View;
use App\ReturnMessage;

class HomeRepository implements HomeRepositoryInterface
{
    public function getAllViews()
    {
        $views = View::SELECT("id","name")
        ->whereNull('deleted_at')
        ->get();
        return $views;
    }
    public function insert($data)
    {
        $return = [];

            try
        {
            $viewObj             = new View();
            $viewObj->name      = $data['name'];
            $viewObj->created_at = date ('Y-m-d H:i:s');
            $viewObj->created_by = 1;
            $viewObj->updated_at = date ('Y-m-d H:i:s');
            $viewObj->updated_by = 1;
            $viewObj->save();
            $return['softGuideStatusCode'] = ReturnMessage::OK;
            return $return;
        }
            catch(\Exception $e)
        {
            $return ['softGuideStatusCode'] = ReturnMessage::INTERNAL_SERVER_ERROR;
            $return ['errorMessage']        = $e->getMessage();

            return $return;
        }

    }
    public function update($data)
    {
        // $viewObj       = new View();
        $id      = $data['id'];
        $viewObj = View::find($id);// obj ထပ် ပီး ကြေ ငြာ စရာ မလိုဘူးလား??
        $viewObj -> name = $data['name'];
        $viewObj -> updated_at = date ('Y-m-d H:i:s');
        $viewObj -> updated_by = 1;
        $viewObj -> save();
        return $viewObj;
    }
    public function delete(int $id)
    {
        $viewObj = View::find($id);
        $viewObj -> deleted_at = date ('Y-m-d H:i:s');
        $viewObj -> deleted_by = 1;
        $viewObj -> save();
        return $viewObj;
    }
}
