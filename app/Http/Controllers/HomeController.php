<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Vision;
use App\Models\Mision;
use App\Models\Objective;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Doner;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
             if ($request->isMethod('post')) 
        {
             DB::table('doners')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
           ]);
          return redirect()->to('/')->with('success', "Doner added successful");
        }

        $vision = Vision::all()->last();
        $mission = Mision::all()->last();
        $objs = Objective::get();
        $test = Testimonial::get();
        $contact = Contact::all()->last();
        return view('index',['vision'=>$vision,'mission'=>$mission,'objs'=>$objs, 'test'=>$test, 'contact'=>$contact]);
    }

    
     public function dashboard() 
    {
        return view('home.index');
    }

     public function vision(Request $request) 
    {
        if ($request->isMethod('post')) 
        {
            //dd($request->description);

            $id = Vision::all()->last()->id;
            
            $vision = Vision::find($id);

            $vision->description = !empty($request->description) ? $request->description : $vision->description;

            $vision->save();
         }

        $vision = Vision::all()->last();
        return view('home.vision',['vision'=>$vision]);
    }
    
     public function mission(Request $request) 
    {
         if ($request->isMethod('post')) 
        {
            //dd($request->description);

            $id = Mision::all()->last()->id;

            $mission = Mision::find($id);

            $mission->description = !empty($request->description) ? $request->description : $mission->description;

            $mission->save();
         }

        $mission = Mision::all()->last();

        return view('home.mission',['mission'=>$mission]);
        
    }
    
     public function objective(Request $request) 
    {
        

          if ($request->isMethod('post')) 
        {
            //dd($request->description);
            if(!empty($request->description)){
                Objective::create(['description'=>$request->description]);
            }
         }

      


        $objs = Objective::get();
        //dd($objs[0]->description);
        return view('home.objective',['objs'=>$objs]);
    }

      public function deleteObjective($id) 
    {

 
           //dd($id);
            if(!empty($id)){
                Objective::destroy($id);
                return redirect()->to('dashboard/objective')->with('success', "Objective deleted successfully");
            }
            return redirect()->to('dashboard/objective')->with('error', "Objective was not deleted");
         
    }


     public function testimonial(Request $request) 
    {
           if ($request->isMethod('post')) 
        {
           // dd($request->avatar);
           
  
        $fileName = time().'.'.$request->avatar->extension();  
   
        $request->avatar->move(public_path('images'), $fileName);
            if(!empty($request->description)){
                Testimonial::create(['name'=>$request->name,'description'=>$request->description,'avatar'=> $fileName]);
            }
         }


        $objs = Testimonial::get();
       

        return view('home.testimonial',['objs'=>$objs]);
    }

       public function deleteTestimonial($id) 
    {
           //dd($id);
            if(!empty($id)){
                Testimonial::destroy($id);
                return redirect()->to('dashboard/testimonial')->with('success', "Testimonial deleted successfully");
            }
            return redirect()->to('dashboard/testimonial')->with('error', "Testimonial was not deleted");
         
    }



      public function contact(Request $request) 
    {
        
        if ($request->isMethod('post')) 
        {
            //dd($request->description);

            $id = Contact::all()->last()->id;

            $contact = Contact::find($id);

            $contact->Address = !empty($request->address) ? $request->address : $contact->Address;
            $contact->phone = !empty($request->phone) ? $request->phone : $contact->phone;
            $contact->email = !empty($request->email) ? $request->email : $contact->email;
            $contact->facebook = !empty($request->facebook) ? $request->facebook : $contact->facebook;
            $contact->instagram = !empty($request->instagram) ? $request->instagram : $contact->instagram;
            $contact->linkedin = !empty($request->linkedin) ? $request->linkedin : $contact->linkedin;
            $contact->twitter = !empty($request->twitter) ? $request->twitter : $contact->twitter;

            $contact->save();
         }

        $contact = Contact::all()->last();
        
        return view('home.contact',['contact'=>$contact]);
    }

      public function donner() 
    {
      
           $objs = Doner::get();
        return view('home.donner',['objs'=>$objs]);
    }

       public function deleteDonner($id) 
    {
         //dd($id);
            if(!empty($id)){
                Doner::destroy($id);
                return redirect()->to('dashboard/donner')->with('success', "Doner deleted successfully");
            }
            return redirect()->to('dashboard/donner')->with('error', "Doner was not deleted");
         
    }

    
}