<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('signwalker_hourly_rate',trans('messages.Hourly Rate'),[])!!}
        {!! Form::input('number','signwalker_hourly_rate',isset($location->signwalker_hourly_rate) ? $location->signwalker_hourly_rate : '',['class'=>'form-control', 'placeholder'=>'Enter Hourly Rate'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('signwalker_total_amount',trans('messages.Total Amount'),[])!!}
        {!! Form::input('number','signwalker_total_amount',isset($location->signwalker_total_amount) ? $location->signwalker_total_amount : '',['class'=>'form-control', 'placeholder'=>'Enter Total Amount'])!!}
    </div>
</div>