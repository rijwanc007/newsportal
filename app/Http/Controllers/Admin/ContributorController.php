<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contributor;
use Illuminate\Support\Facades\Redirect;
class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = Contributor::all();
        return view('backend.contributor.manage_contributor',compact('contributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contributor.create_contributor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contributortimage= $request->file('contributorimage');
        $name = time().'.'.$contributortimage->getClientOriginalExtension();
        $image_name =$contributortimage->move(public_path().'/contributorimage/', $name);
       
       
        $contributor= new Contributor();
        $contributor->name = $request->name;
        $contributor->image =$name;
        $contributor->designation = $request->designation;
        $contributor->status = $request->status;
        $contributor->save();
        return Redirect::to('contributor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contributorbyid= Contributor::where('id','=',$id)->first();
        
        return view('backend.contributor.edit_contributor',compact('contributorbyid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contributorimage = $request->file('contributorimage');
        if (!empty($contributorimage)){

        //$postimage= $request->file('imagename');
        $name = time().'.'.$contributorimage->getClientOriginalExtension();
        $image_name =$contributorimage->move(public_path().'/contributorimage/', $name);
        $contributor = Contributor::where('id','=',$id)->first();
        $contributor->name = $request->name;
        $contributor->image = $name;
        $contributor->designation = $request->designation;
        $contributor->status = $request->status;
        $contributor->save();
        return Redirect::to('contributor');

       } else {

        $contributor = Contributor::where('id','=',$id)->first();
        $contributor->name = $request->name;
        $contributor->designation = $request->designation;
        $contributor->status = $request->status;
        $contributor->save();
        return Redirect::to('contributor');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contributor = Contributor::find($id);
        $unlinkimage = $contributor->image;
        unlink('contributorimage/'.$unlinkimage);
        $contributor->delete();
        return Redirect::to('contributor');
    }
}
