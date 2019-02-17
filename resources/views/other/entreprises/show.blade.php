@extends('shop::base')

@section('content')
    <div class="panel-body">

        <div class="col-lg-9 col-md-9 col-sm-12" >
                    <div class="item col-sm-12 col-lg-12 col-md-12 col-xs-12 list-view">
                        <div class="">


                            <div class="image">

                                <a href="product-details.html"><img src="{{$entreprise->image_url}}" alt="img" class="img-responsive"></a>

                            </div>

                            <div class="description">
                                <h4><a href="product-details.html">{{$entreprise->name}}</a></h4>


                                <div class="">
                                    <p> {{$entreprise->description}} </p>
                                </div>
                                <span class="size">Pays : {{$entreprise->pays}} | Adresse: {{$entreprise->address}}</span></div>
                        </div>
                    </div>
                    <!--/.item-->

                </div>

        </div>
    <h1 class="title-big text-center section-title-style2">
        <span>Produits</span>
    </h1>
        @foreach($entreprise->products as $product)
            <div class="col-lg-6 col-md-4 col-sm-12" >

                    <div class="product">

                        <img class="img-responsive" src="{{$product->image_url}}" alt="img">

                        <h3 class="block-title-3">
                            {{$product->name}}
                        </h3>

                        <p>
                            {{$product->description}}
                        </p>

                    </div>

            </div>
            @endforeach
    </div>
@endsection
