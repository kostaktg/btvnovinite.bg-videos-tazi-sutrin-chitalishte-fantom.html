@extends('layouts.app')

@section('title')
Всички
@endsection



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">



            <div class="panel-body outline">
                <img class="avatar" src="{{ URL('/uploads/avatars/'.$user->image ) }} " >
                <h2> Потребител : {{ $user->name }} </h2>

                <form enctype="multipart/form-data" action="{{ URL(route('profileimage')) }}" method="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="image">File input</label>
                    <input type="file" id="image" name="image">
                    <p class="help-block">Изберете снимка от компютъра си.</p>
                </div>

                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </form>

        </div>
    </div>
</div>
</div>


@endsection
