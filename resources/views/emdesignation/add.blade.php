@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Designation</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{URL('/emdesignation/add')}}">

                  <div class="form-group">
                     <!-- {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'q')) !!} -->
                     <input type="text" class = "form-control" name="term" id = "q" data-action="{{ route('search-autocomplete') }}">
                  </div>

                  <div class="form-group">
                    <!-- {!! Form::label('designation_id', 'Designation', ['class'=>'control-label col-md-4']) !!} -->
                    {!! Form::select('designation_id', $designation, null, ['placeholder' => 'Select designation', 'class'=>'form-control']) !!}
                  </div>


                  <input type= "date" class = "form-control" name="dateStart" placeholder="Date Start"><br>
                  <input type= "date" class = "form-control" name="dateEnd" placeholder="Date End"><br>
                  <input type= "time" class = "form-control" name="shiftStart" placeholder="Shift Start"><br>
                  <input type= "time" class = "form-control" name="shiftEnd" placeholder="Shift Start"><br>
                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(function()
{
$('#q').each(function() {
     var $this = $(this);
     var src = $this.data('action');

     $this.autocomplete({
         source: src,
         minLength: 2,
         select: function(event, ui) {
             $this.val(ui.item.value);
             $('#id').val(ui.item.id);
         }
     });
 });
});
</script>
@endsection
