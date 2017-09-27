<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Club;
use Image;

class ClubController extends Controller
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





     public function index()
	{

		$clubs=Club::paginate(6);


		return view('pages.club',compact('clubs'));

	}



	public function edit($id)
	{

		$clubs=Club::take(4)->get();

		$club=Club::find($id);




		    return view('pages.clubitem', compact('club','clubs'));

	}




	public function editupdate($id)
	{

		$club=Club::find($id);

$value = session()->get('data');

		return view('admin.editclub', compact('club','value'));

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
   		$query = Club::find($id);
    	$query->name = $request->name;

if(isset($request->image))
{
		    $image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		//Записване голяма снимка 900-675
    		Image::make($image)->resize(900, 675)->save( public_path('img/club/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/club/' . $filename) );


	$club = Club::find($id);// SAVE IF

if($club->image)
{
//Изтриване на малка снимка
  file::delete('img/club/' . $club->image);
//Изтриване на голяма снимка
  file::delete('img/club/big' . $club->image);
}

			$query->image = $filename;
}   		

			$query->text = $request->text;

    		$query->save(); //END SAVE

	



		return redirect()->back()->with('data', ['Промяната беше приета']);
}


			public function show($id)
	{

      $lastclubs=Club::orderBy('created_at', 'desc')->take(4)->get();
      $club=Club::find($id);
      $blog=Club::find($id);


		return view('pages.clubitem' ,compact('club','lastclubs', 'clubs','blog'));
	}





	 public function create()
	{
$clubs=Club::orderBy('id', 'desc')->paginate(2);

		return view('admin.club', compact('clubs'));

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
    		//Записване голяма снимка 900-675
    		Image::make($image)->resize(900, 675)->save( public_path('img/club/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/club/' . $filename) );






		Club::create([
			'name' => $request->name,
			'image'=>$filename,
			'text'=> $request->text,
			]);



		return back();

	}



	public function delete($id)
	{




		$club = Club::find($id);
		$club->delete();

		  	if($club->image){

//Изтриване на малка снимка
  file::delete('img/club/' . $club->image);
//Изтриване на голяма снимка
  file::delete('img/club/big' . $club->image);
}

		return back();
		
	}




  



















}
