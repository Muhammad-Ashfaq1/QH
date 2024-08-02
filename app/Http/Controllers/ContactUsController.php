<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactUs;
class ContactUsController extends Controller
{


    public function show()

    {
        return view("Admin.contact-us.index");
    }
      public function store(Request $request)
      {
       
          $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());

       
          if($query)
          {
            //  toastr()->success('Your Queries has been Received Successfully!');
              return redirect()->back();
  
          }


}

public function index()
{
 
    $queries = ContactUs::orderByDesc('created_at')->get();
  
    return view('admin.partials.contact-us', compact('queries'));
}

public function support()
{
 

  
    return view('admin.partials.support');
}
}
