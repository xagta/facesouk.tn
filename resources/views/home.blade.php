@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">

                <div class="card-body">
                    <div class="panel-body">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row userInfo">
                                <div class="col-xs-12 col-sm-12">
                                    <h1 class="title-big text-center section-title-style2">
            <span>TV SHOPPING</span>
                                    </h1>

                                    <p class="lead text-center">
                                        <iframe width="560" height="349" src="https://www.youtube.com/embed/live_stream?channel=UCAGRBEZf9_4oQm6ycaJs5hw" frameborder="0" allowfullscreen></iframe>
                                    </p>


                                    <h1 class="title-big text-center section-title-style2">
                                        <span>Entreprises</span>
                                    </h1>
                                        <div class="row animated">
                                            @foreach($entreprises as $entreprise)
                                                <a href="{{route('show_entreprise',['id'=>$entreprise->id])}}">
                                        <div class="c col-md-4 col-sm-6 col-sm-6">
                                            <div class="product">

                                                <img class="img-responsive" src="{{$entreprise->image_url}}" alt="img">

                                                <h3 class="block-title-3">
                                                    {{$entreprise->name}}
                                                </h3>

                                                <p>
                                                   {{$entreprise->description}}
                                                </p>

                                            </div>

                                        </div>
                                                </a>
                                            @endforeach




                                    </div>
                                    <!--/.row-->

                                    <hr>
                                </div>
                            </div>
                            <!--/row end-->
                        </div>



                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@section('footer')

    @endsection
