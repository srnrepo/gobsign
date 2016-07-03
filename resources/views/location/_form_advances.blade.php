<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_walker_advance',trans('messages.Walker Advance'),[])!!}
        {!! Form::input('number','advances_walker_advance',isset($location->advances_walker_advance) ? $location->advances_walker_advance : '',['class'=>'form-control', 'placeholder'=>'Enter Walker Advance'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_driver_advance',trans('messages.Driver Advance'),[])!!}
        {!! Form::input('number','advances_driver_advance',isset($location->advances_driver_advance) ? $location->advances_driver_advance : '',['class'=>'form-control', 'placeholder'=>'Enter Driver Advance'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_other',trans('messages.Other'),[])!!}
        {!! Form::input('number','advances_other',isset($location->advances_other) ? $location->advances_other : '',['class'=>'form-control', 'placeholder'=>'Enter Other'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_prepaid',trans('messages.Prepaid'),[])!!}
        {!! Form::input('number','advances_prepaid',isset($location->advances_prepaid) ? $location->advances_prepaid : '',['class'=>'form-control', 'placeholder'=>'Enter Prepaid'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_deduction',trans('messages.Deduction'),[])!!}
        {!! Form::input('number','advances_deduction',isset($location->advances_deduction) ? $location->advances_deduction : '',['class'=>'form-control', 'placeholder'=>'Enter Deduction'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('advances_balance_due',trans('messages.Balance Due'),[])!!}
        {!! Form::input('number','advances_balance_due',isset($location->advances_balance_due) ? $location->advances_balance_due : '',['class'=>'form-control', 'placeholder'=>'Enter Balance Due'])!!}
    </div>
</div>