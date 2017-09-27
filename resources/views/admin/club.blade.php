     @extends('layouts.app')

     @section('title')
Клубове
     @endsection

@section('content') 
<div class="container">
<div class="row">
<div class="col-md-6 outline">

<h2>Добавяне на нова Клуб</h2>
<form enctype="multipart/form-data" action="{{URL(route('storeclub'))}}" method="POST">


 {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" class="form-control" id="title" name='name' value="{{ old('name') }}">
  </div>
  <div class="form-group">
    <label for="text">Текст</label>
    <textarea class="form-control" rows="3" id="text" name="text">{{ old('text') }}</textarea>
  </div>
  <div class="form-group">
    <label for="imageid">Качване на снимка</label>
    <input type="file" id="imageid" name="image">
    <p class="help-block">Избери снимка от компютъра</p>
  </div>
  <div class="checkbox">

  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="submit">Добави</button></div>


</form>

@include('includes.errors')

</div></div></div>




        <div class="section">
	    	<div class="container">
				<div class="row outline">


        @foreach($clubs as $club)

        @include('structures.club_admin')


        @endforeach

					
 
            <!-- Pagination -->
                <div class="pagination-wrapper ">
                <div class="pagination">
                  <ul class="pagination-sm">
                  {{ $clubs->links() }}
                  </ul>
                  </div>
                </div> 

				</div>


			</div>

	    </div>

@endsection
