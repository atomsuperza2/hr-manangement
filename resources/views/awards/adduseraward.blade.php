@extends('layouts.customlayouts')



@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

<div class="container form-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-regis">
                <div class="heading">Add awards</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('awards.storeaward', $accounts->id)}}">

                  <div class="form-group">


                  	<input class="form-control" name="name" type="text" value= "{{$accounts->name}}" disabled>
                    <input name="user_id" type="hidden" value= "{{$accounts->id}}" >

                  </div>


                  <input type= "text" class = "form-control" name="awardName" placeholder="Award name"><br>
                  <input type= "text" class = "form-control" name="giftItem" placeholder="Gift Item"><br>
                  <input type= "text" class = "form-control" name="cashPrice" placeholder="Cash Price"><br>


                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
