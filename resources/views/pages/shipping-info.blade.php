@extends('main')

@section('content')
    <br>
<div class="row">
    {{-- <div class="col-lg-6 col-md-6"> --}}
         <div class="col-lg-4 col-md-6 col-sm-7">
              </div>

                 <div class="col-lg-4 col-md-4 col-md-offset-1">
                    <div class="contact__content">
                        <div class="contact__address">
    {{-- <div class="small-6 small-centered columns"> --}}
        <h3>Shipping Info</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Address Line') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'State') }}
            {{ Form::text('state', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Zip') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>
  </div>
  </div>  


</div>


@endsection