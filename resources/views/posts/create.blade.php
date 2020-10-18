@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/styles.css')!!}

@endsection

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Create Post</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Create Section Begin -->
    <section class="create spad">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-4 col-md-6 col-sm-7">
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <h1>Create New Post</h1>
                    <hr>
                            {!! Form::open(array('' => '', 'required' => '')) !!}
                            {{ Form::label('title', 'Title:') }}
                            {{ Form::text('title', null, array('class' => 'form-control', 'required' => ''))}}

                            {{ Form::label('body', "Post Body:") }}
                            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))}}

                            {{ Form::submit('Create Post', array('class'=> 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

                            {!! Form::close() !!}
                       
                </div>
               
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection