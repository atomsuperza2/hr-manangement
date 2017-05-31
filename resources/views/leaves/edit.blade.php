@extends('layouts.app')



@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit leave</div>

                <div class = "panel-body">
                <form class = "" method = "GET" action = "{{route('leaves.update', $leaves->id)}}">

                  <div class="form-group">

                  	<input class="form-control" name="name" type="text" value= "{{$leaves->accountinfo->name}}" disabled>
                  	<input class = "form-control" name="user_id" value= "{{$leaves->user_id}}" type="hidden">

                  </div>




                  <div class="form-group">

                    {!! Form::select('leavetype_id', $leavestypes, $leaves->leavetype_id, ['placeholder' => 'Select', 'class'=>'form-control']) !!}
                  </div>


                  <input type= "date" class = "form-control" name="dateFrom" value = "{{$leaves->dateFrom}}" placeholder="Date From"><br>
                  <input type= "date" class = "form-control" name="dateTo" value = "{{$leaves->dateTo}}" placeholder="Date To"><br>
                  <input type= "date" class = "form-control" name="dateApplied" value = "{{$leaves->dateApplied}}" placeholder="Date Applied"><br>
                  <input type= "text" class = "form-control" name="reason" value = "{{$leaves->reason}}" placeholder="Reason"><br>

                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

<!-- @section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.js" charset="utf-8"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


<script type="text/javascript">
  		$(function () {
          $('#searchname').autocomplete({
            source : '{!!URL::route('autocomplete')!!}',
            minLength:1,

            select:function(e,ui){
              $('#user_id').val(ui.item.id);
              $('#name').val(ui.item.value);
            }
          });
  });

   </script>
@endsection -->
