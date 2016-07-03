<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('capital_deduction_amount',trans('messages.Amount'),[])!!}
        {!! Form::input('number','capital_deduction_amount',isset($location->capital_deduction_amount) ? $location->capital_deduction_amount : '',['class'=>'form-control', 'placeholder'=>'Enter Amount'])!!}
    </div>
</div>