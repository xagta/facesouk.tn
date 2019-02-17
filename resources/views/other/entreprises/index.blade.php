@extends('shop::base')

@section('content')
    <div class="panel-body">

    <div class="col-lg-9 col-md-9 col-sm-12" >
@foreach($entreprises as $entreprise)

    <div class="row  categoryProduct xsResponse clearfix">
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
            <div class="product">
                <a class="entreprise-type" >
                        <span class="label label-success">{{$entreprise->type}}</span>
                </a>

                              <div class="image">

                                 <a href="product-details.html"><img src="{{$entreprise->image_url}}" alt="img" class="img-responsive"></a>

                </div>

                <div class="description">
                    <h4><a href="product-details.html">{{$entreprise->name}}</a></h4>


                    <div class="list-description">
                        <p> {{$entreprise->description}} </p>
                    </div>
                    <span class="size">Pays : {{$entreprise->pays}} | Adresse: {{$entreprise->address}}</span></div>
                <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"> </i>Consulter </span> </a></div>
            </div>
        </div>
        <!--/.item-->

    </div>
@endforeach
    </div>
    </div>
@endsection
