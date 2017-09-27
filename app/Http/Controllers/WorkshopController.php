<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Workshop;
use Image;

class WorkShopController extends Controller
{

		protected $errors = [

		'name.required'   => 'Попълването на полето:  ЗАГЛАВИЕ :е задължително. ',
		'image.required'  => 'Трябва да добавите снимка.',
		'text.required'   => 'Трябва да въветете: ТЕКСТ.',
		'name.min'        => 'Полето: ТЕКСТ :не може да съдържа по малко от 3 символа.',
		'text.min'        => 'Полето: ТЕКСТ :трябва да съдържа поне 20 символа.'

		];


/* CONSTRUCT */
	    public function __construct()
    {
        $this->middleware('auth', ['only' => array('editupdate','update','create','store','delete')]);
    }

    public function donate()
    {
        return view('pages.donate');
    }



    public function index()
	{

		$blogs=Workshop::paginate(6);


		return view('pages.index',compact('blogs'));

	}







	public function edit($id)
	{

		$blogs=Workshop::take(4)->get();

		$blog=Workshop::find($id);



		    return view('pages.portfolioitem', compact('blog','blogs'));

	}



	public function editupdate($id)
	{

		$blog=Workshop::find($id);

		$value = session()->get('data');

		return view('admin.editworkshop', compact('blog','value'));

	}



	public function update(Request $request ,$id)
	{

	

// VALIDATION
		  $this->validate(request(), [

			'name'  => 'required|min:3',
			'text'  => 'required|min:20',

			], $this->errors);
//END VALIDATION


//SAVE 
   		$query = Workshop::find($id);
    	$query->name = $request->name;

if(isset($request->image))
{
		    $image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		//Записване голяма снимка 860-484
    		Image::make($image)->resize(860, 484)->save( public_path('img/portfolio/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/portfolio/' . $filename) );


	$workshop = Workshop::find($id);// SAVE IF

if($workshop->image)
{
//Изтриване на малка снимка
  file::delete('img/portfolio/' . $workshop->image);
  //Изтриване на голяма снимка
   file::delete('img/portfolio/big' . $workshop->image);
}

			$query->image = $filename;
}   		

			$query->text = $request->text;

    		$query->save(); //END SAVE

	



		return redirect()->back()->with('data', ['Промяната беше приета']);




	}






		public function updateresize(Request $request ,$id)
	{

	




//SAVE 
   		$query = Workshop::find($id);
  

if(isset($request->image))
{
		    $image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		//Записване голяма снимка 860-484
    		Image::make($image)->resize(860, 484)->save( public_path('img/portfolio/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(347, 194)->save( public_path('img/portfolio/' . $filename) );


	$workshop = Workshop::find($id);// SAVE IF

if($workshop->image)
{
//Изтриване на малка снимка
  file::delete('img/portfolio/' . $workshop->image);
  //Изтриване на голяма снимка
   file::delete('img/portfolio/big' . $workshop->image);
}

			$query->image = $filename;
}   		

	

    		$query->save(); //END SAVE

	



		return redirect()->back()->with('data', ['Промяната беше приета']);




	}







 public function show()
	{

		$blogs=Workshop::paginate(6);



		return view('pages.portfolio',compact('blogs'));

	}







		 public function create()
	{
$blogs=Workshop::orderBy('id', 'desc')->paginate(2);

		return view('admin.workshop', compact('blogs'));

	}


	 public function store(Request $request)
	{

// VALIDATION

		  $this->validate(request(), [

			'name'  => 'required|min:3',
			'image' => 'required',
			'text'  => 'required|min:20',

			], $this->errors);
//END VALIDATION

		    $image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		//Записване голяма снимка 860-484
    		Image::make($image)->resize(860, 484)->save( public_path('img/portfolio/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/portfolio/' . $filename) );



		Workshop::create([
			'name' => $request->name,
			'image'=>$filename,
			'text'=> $request->text,
			]);



		return back();

	}








	public function delete($id)
	{




		$workshop = Workshop::find($id);
		$workshop->delete();

		  	if($workshop->image){

//Изтриване на малка снимка
  file::delete('img/portfolio/' . $workshop->image);
  //Изтриване на голяма снимка
  file::delete('img/portfolio/big' . $workshop->image);
}

		return back();
		
	}



}
