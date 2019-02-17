@extends('shop::base')

@section('content')
    <div class="panel-body">

    <div class="col-lg-9 col-md-9 col-sm-12" >
@foreach($opps as $opp)
    <div class="row  categoryProduct xsResponse clearfix">
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
            <div class="product">
                <a class="opp-type"  data-placement="left">
                    @if($opp->type=='vente')
                        <span class="label label-success">{{$opp->type}}</span>
                        @elseif($opp->type=='achat')
                        <span class="label label-danger">{{$opp->type}}</span>
                        @elseif($opp->type=='partenaire')
                        <span class="label label-info">{{$opp->type}}</span>

                    @endif
                </a>

                <div class="image">
                    <div class="quickview">
                        <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                    </div>
                    {{--<a href="product-details.html"><img src="images/product/30.jpeg" alt="img" class="img-responsive"></a>--}}

                </div>
                <div class="description">
                    <h4><a href="product-details.html">{{$opp->titre}}</a></h4>


                    <div class="list-description">
                        <p> {{$opp->description}} </p>
                    </div>
                    <span class="size">Pays : {{$opp->pays}} | utilisateur : {{$opp->owner->name}} | Date de publication: {{$opp->updated_at}} </span></div>
                <div class="price"><span>{{$opp->price}}TND  / item </span></div>
                <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"> </i>Consulter l'offre </span> </a></div>
            </div>
        </div>
        <!--/.item-->

    </div>
@endforeach
    </div>
    </div>
@endsection
