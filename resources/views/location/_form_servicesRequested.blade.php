<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_sign_rate',trans('messages.Sign Rate'),[])!!}
        {!! Form::input('number','services_sign_rate',isset($location->services_sign_rate) ? $location->services_sign_rate : '',['class'=>'form-control', 'placeholder'=>'Enter Sign Rate'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_walker_rate',trans('messages.Walker Rate'),[])!!}
        {!! Form::input('number','services_walker_rate',isset($location->services_walker_rate) ? $location->services_walker_rate : '',['class'=>'form-control', 'placeholder'=>'Enter Walker Rate'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_driver_rate',trans('messages.Driver Rate'),[])!!}
        {!! Form::input('number','services_driver_rate',isset($location->services_driver_rate) ? $location->services_driver_rate : '',['class'=>'form-control', 'placeholder'=>'Enter Driver Rate'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_other',trans('messages.Other'),[])!!}
        {!! Form::input('number','services_other',isset($location->services_other) ? $location->services_other : '',['class'=>'form-control', 'placeholder'=>'Enter Other'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_prepaid',trans('messages.Prepaid'),[])!!}
        {!! Form::input('number','services_prepaid',isset($location->services_prepaid) ? $location->services_prepaid : '',['class'=>'form-control', 'placeholder'=>'Enter Prepaid'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_deduction',trans('messages.Deduction'),[])!!}
        {!! Form::input('number','services_deduction',isset($location->services_deduction) ? $location->services_deduction : '',['class'=>'form-control', 'placeholder'=>'Enter Deduction'])!!}
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        {!! Form::label('services_balance_due',trans('messages.Balance Due'),[])!!}
        {!! Form::input('number','services_balance_due',isset($location->services_balance_due) ? $location->services_balance_due : '',['class'=>'form-control', 'placeholder'=>'Enter Balance Due'])!!}
    </div>
</div>