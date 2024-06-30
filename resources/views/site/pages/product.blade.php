@extends('layouts.app')
@section('title', 'Products')
@section('content')
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 style="color: #fff">Products List</h2>
    </div>
</section>
<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4">
                        <figure class="card card-product">
                            <div class="img-wrap padding-y"><img src="https://cdn.dribbble.com/userupload/13283412/file/original-64b7ed7c9829096713babb98b5953ebe.jpg?resize=1024x768" alt=""></div>
                            <figcaption class="info-wrap">
                                <h4 class="title">{{ $product->name }}</a></h4>
                            </figcaption>
                            <!-- <div class="col-md-12">
                                <article class="card mt-4">
                                    <div class="card-body">
                                        {!! $product->description !!}
                                    </div>
                                </article> 
                            </div>-->
                            <div class="bottom-wrap">
                                @if ($product->price != 0)
                                    <div class="price-wrap h5">
                                    <span class="price"> {{ config('services.currency_symbol').' : '.$product->price }} </span>
                                    @if(!empty(auth()->user()))
                                        <span class="btn pill-right"> <a href="{{ route('product.detail', $product->id) }}">BUY NOW</a></span>
                                    @else
                                    <span class="btn pill-right"> <a href="{{ route('login') }}">BUY NOW</a></span>
                                    </div>
                                    @endif
                                @endif
                            </div>
                        </figure>
                    </div>
                @empty
                    <p>No Products found.</p>
                @endforelse
                <div class="bottom-wrap">
                {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@stop
