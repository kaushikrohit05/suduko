<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
 

 

class LocationController extends Controller
{
    public function index()
    {
         $location = Location::whereNull('parent')
         ->with(['children'])
         ->paginate(10);
        //dd($location);


          return view('admin/locations', ['location' => $location]);

    }
    public function add_location()
    {
        $locations = Location::whereNull('parent')->get();
        return view('admin/add_location', ['locations' => $locations]);

        

    }
    public function save_location(Request $request)
    {
        $location = new Location;
        $location->parent =$request->parent_location; 
        $location->location =$request->location; 
        $location->location_slug =$request->location_slug; 
        $location->save();

        return redirect('admin/locations');

    } 
    
    
    public function edit_location($id = null)
    {
         $location = Location::all()->where('id',$id)->first();
        return view('admin/edit_location', ['location' => $location]);
    }

    public function getlocations($id = null)
    {
        $location = Location::where('parent',$id)->get()->toArray();;
        return $location;
    }


    public function update_location(Request $request, $id)
    {
        $location = Location::find($id);
        $location->parent           =$request->parent_location; 
        $location->location         =$request->location; 
        $location->location_slug    =$request->location_slug; 
        $location->save();

        return redirect('admin/locations');

    }
    
    public function delete_location($id = null)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect('admin/locations');
    }

}