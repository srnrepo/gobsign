<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('signdriver_hourly_rate',trans('messages.Hourly Rate'),[])!!}
        {!! Form::input('number','signdriver_hourly_rate',isset($location->signdriver_hourly_rate) ? $location->signdriver_hourly_rate : '',['class'=>'form-control', 'placeholder'=>'Enter Hourly Rate'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('signdriver_total_amount',trans('messages.Total Amount'),[])!!}
        {!! Form::input('number','signdriver_total_amount',isset($location->signdriver_total_amount) ? $location->signdriver_total_amount : '',['class'=>'form-control', 'placeholder'=>'Enter Total Amount'])!!}
    </div>
</div>