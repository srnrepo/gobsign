<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('district_manager_name',trans('messages.Name'),[])!!}
        {!! Form::input('text','district_manager_name',isset($location->district_manager_name) ? $location->district_manager_name : '',['class'=>'form-control', 'placeholder'=>'Enter Name'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('district_manager_amount',trans('messages.Amount'),[])!!}
        {!! Form::input('number','district_manager_amount',isset($location->district_manager_amount) ? $location->district_manager_amount : '',['class'=>'form-control', 'placeholder'=>'Enter Amount'])!!}
    </div>
</div>