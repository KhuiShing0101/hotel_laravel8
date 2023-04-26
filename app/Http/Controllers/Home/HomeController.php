<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\View;
use App\Models\Room;
use App\Models\Bed;
use DB;
use App\Http\Requests\ViewStoreRequest;
use App\Http\Requests\ViewUpdateRequest;

use App\Repository\HomeRepositoryInterface;
use App\Repository\HomeRepository;
use App\ReturnMessage;

class HomeController extends Controller
{
    private $homeRepository;
    public function __construct( HomeRepositoryInterface $homeRepository )
    {
        $this->HomeRepositoryInterface = $homeRepository;
    }
    public function index()
    {
        return view ('home.home');
    }


    public function getView()
    {

        // $views = View::SELECT("id","name")
        //         ->whereNull('deleted_at')
        //         ->get();

        $views = $this->HomeRepositoryInterface->getAllViews();

        return view('view.view',compact([
                'views'
        ]));
    }

    public function viewEdit($id)
    {
        $view=View::find($id);

        return view
        ('view.edit_view',compact([
         'view'
        ])) ;
    }

    public function viewDelete($id)
    {

        $data= View::find($id);
        $result= $this->HomeRepositoryInterface->delete((int)$id);
        // $result = View::where('id','=',$id)->delete(); // Hard delete
        return redirect ()->route('viewListing');

    }

    public function viewCreate()
    {
        return view('view.create_view');
    }

    public function viewStore( ViewStoreRequest $request )
    {
        // laravel default doc method
        // $validated  =$request->validate([
        //     'name'  => 'required|unique:view|max:10'
        // ]);
        try
        {
            $data = $request->all();
            $result = $this->HomeRepositoryInterface->insert($data);

            if($result['softGuideStatusCode']== ReturnMessage::OK)
                {
                    return redirect()->route('viewListing');
                }
            else
                {
                    return redirect()->route('viewCreate')->with('error_message',$result['errorMessage']);
                }

        }
        catch(\Exception $e)
            {
                abort(500);
            }

        // query from controller
        // $name=$request->get('name');
        // $paramObj= new View();
        // $paramObj-> name =$name;
        // $paramObj->created_at = date ('Y-m-d H:i:s');
        // $paramObj->created_by = 1;
        // $paramObj->updated_at = date ('Y-m-d H:i:s');
        // $paramObj->updated_by = 1;
        // $paramObj->save();
        // return redirect ()->route('viewListing');
    }

    public function viewUpdate( ViewUpdateRequest $request )
    {
        // laravel default doc method
        // $validated  =$request->validate([
        //     'name'  => 'required|unique:view|max:10'
        // ]);

        $data = $request->all();
        $result = $this->HomeRepositoryInterface->update($data);
        return redirect()->route('viewListing');
        // $id=$request->get('id');
        // $name=$request->get('name');
        // $paramObj= View::find($id);
        // $paramObj-> name =$name;
        // $paramObj->created_at = date ('Y-m-d H:i:s');
        // $paramObj->created_by = 1;
        // $paramObj->updated_at = date ('Y-m-d H:i:s');
        // $paramObj->updated_by = 1;
        // $paramObj->save();
        // return redirect ()->route('viewListing');
    }


    public function test()
    {
        // $name   = 'Lake View';
        // $id     = 1;

                    // Eloquent

        // $data   = View::SELECT('name')
        //         ->where('id','=',$id)
        //         ->WhereNull('deleted_at')
        //         ->get();

                        // raw DB

        // $data      = DB::SELECT("SELECT * FROM  `view` WHERE name ='$name' ");
        // dd($data);

        // $views   = View::SELECT ("id","name")
        //         ->whereNull('deleted_at')
        //         ->get();

        // $rooms = Room::SELECT("room.id","room.name","room.occupancy","view.name as view_name")

        //         ->LEFTJOIN ("view","room.view_id","=","view.id")
        //         ->get();

        // $views=View::SELECT ('name','id')
        //         ->get();
        // return view('test', compact([
        //     'views'
        // ]));

            // Room to View BelongsTo

        $rooms= Room:: SELECT ("id","name","view_id","bed_id")
              ->WhereNull('deleted_at')
              ->get();
        return view('test.test', compact([
                'rooms'
        ]));

        $views = View::SELECT ('id','name')
                ->WhereNull('deleted_at')
                ->get();
        return view('test.test', compact([
                'views'
        ]));

        $beds= Bed::SELECT ("id","name")
             ->WhereNull('deleted_at')
             ->get();
         return view('test.test', compact([
                'beds'
        ]));

        // $rooms = Room::SELECT ("room.id","room.name","room.occupancy","view.name as view_name")

        //         ->LEFTJOIN ("view","room.view_id","=","view.id")
        //         ->get();

        //     return view('test.room',
        //                 first([
        //                     'rooms'
        //                 ]));
    }

}
