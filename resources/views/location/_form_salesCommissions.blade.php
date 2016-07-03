<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('sales_name',trans('messages.Name'),[])!!}
        {!! Form::input('text','sales_name',isset($location->sales_name) ? $location->sales_name : '',['class'=>'form-control', 'placeholder'=>'Enter Name'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('sales_amount',trans('messages.Amount'),[])!!}
        {!! Form::input('number','sales_amount',isset($location->sales_amount) ? $location->sales_amount : '',['class'=>'form-control', 'placeholder'=>'Enter Amount'])!!}
    </div>
</div>