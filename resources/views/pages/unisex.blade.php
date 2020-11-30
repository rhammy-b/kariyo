@extends('main')

@section('title', '| men')

@section('content')



 <div class="col-lg-12 col-md-11">
                    <div class="row">
                        @forelse($unisex as $uni)
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                              
                                <div class="product__item__pic set-bg" data-setbg="{{url('img',$uni->image)}}">
                                    <div class="label new">New</div>
                                    <ul class="product__hover">
                                        <li><a href="{{url('img',$uni->image)}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="product__item__text">
                                    <h6><a href="/product-details">{{$uni->name}}</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                     <div class="product__price">{{$uni->description}}</div>
                                    <div class="product__price">${{$uni->price}}</div>

                                </div>
                            </div>
                       </div>

                       @empty
                       <h3>No Products</h3>
                       @endforelse
                    </div>
                        
</div>        

@endsection