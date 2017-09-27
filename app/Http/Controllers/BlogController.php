<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Blog;
use Image;
class BlogController extends Controller
{


	protected $errors = [

		'name.required'   => 'Попълването на полето:  ЗАГЛАВИЕ :е задължително. ',
		'image.required'  => 'Трябва да добавите снимка.',
		'text.required'   => 'Трябва да въветете: ТЕКСТ.',
		'name.min'        => 'Полето: ТЕКСТ :не може да съдържа по малко от 3 символа.',
		'text.min'        => 'Полето: ТЕКСТ :трябва да съдържа поне 20 символа.'

		];




		    public function __construct()
    {
        $this->middleware('auth', ['only' => array('editupdate','update','create','store','delete')]);
    }



    

	public function index()
	{

		if(isset($_GET['type'])){
			$type = $_GET['type'];

			$blogs=Blog::where('type', $type)->paginate(4);
		} else {
			$blogs=Blog::paginate(4);
		}


		


		return view('pages.blog',compact('blogs'));

	}




	public function edit($id)
	{

		
		$blogs=Blog::paginate(4);

		$blog=Blog::find($id);



		    return view('pages.blog', compact('blog','blogs'));

	}







	public function editupdate($id)
	{

		$blog=Blog::find($id);

$value = session()->get('data');

		return view('admin.editblog', compact('blog','value'));

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
   		$query = Blog::find($id);
    	$query->name = $request->name;
    	$query->type = $request->type;

if(isset($request->image))
{
		    $image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		//Записване голяма снимка 900-675
    		Image::make($image)->resize(900, 675)->save( public_path('img/blog/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/blog/' . $filename) );


	$blog = Blog::find($id);// SAVE IF

if($blog->image)
{
//Изтриване на малка снимка
  file::delete('img/blog/' . $blog->image);
//Изтриване на голяма снимка
  file::delete('img/blog/big' . $blog->image);
}

			$query->image = $filename;
}   		

			$query->text = $request->text;


    		$query->save(); //END SAVE

	



		return redirect()->back()->with('data', ['Промяната беше приета']);




	}









	public function show($id)
	{

      $lastblogs=Blog::orderBy('created_at', 'desc')->take(4)->get();
      $blog=Blog::find($id);


		return view('pages.blogitem' ,compact('blog','lastblogs', 'blogs'));
	}




		 public function create()
	{
$blogs=Blog::orderBy('id', 'desc')->paginate(2);

		return view('admin.blog', compact('blogs'));

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
    		Image::make($image)->resize(900, 675)->save( public_path('img/blog/big' . $filename) );
    		//Записване на малка снимка 350-262
    		Image::make($image)->resize(350, 262)->save( public_path('img/blog/' . $filename) );






		Blog::create([
			'name' => $request->name,
			'type' => $request->type,
			'image'=>$filename,
			'text'=> $request->text,
			]);



		return back();

	}



	public function delete($id)
	{




		$blog = Blog::find($id);
		$blog->delete();

		  	if($blog->image){

//Изтриване на малка снимка
  file::delete('img/blog/' . $blog->image);
//Изтриване на голяма снимка
  file::delete('img/blog/big' . $blog->image);
}

		return back();
		
	}


}
