@extends('main')

@section('title', '| Sign-up Page')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Sign up</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
  <!-- Contact Section Begin -->
    <section class="sign-up spad">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-7">

              </div>
              
                 <div class="col-lg-4 col-md-4">
                    <div class="sign-up__content">
                        
                        <div class="sign-up__form">
                            <h5>sign up</h5>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="text" placeholder= "E-mail">
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirm Password">
                                <button type="submit" class="site-btn">Sign up</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

@endsection