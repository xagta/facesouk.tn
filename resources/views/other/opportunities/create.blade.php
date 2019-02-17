@extends('shop::base')


@section('content')

    <div class="panel-body">
        <form class="form-horizontal" action="{{route('opportunities.store')}}" method="POST">
            {{csrf_field()}}
            <fieldset>

                <!-- Form Name -->
                <legend>Publier une opprtunité</legend>

                <!-- Text input-->
                <div class="form-group">

                    <label class="col-md-4 control-label" for="titre">Titre</label>

                    <div class="col-md-4">
                        <input id="titre" name="titre" placeholder="" class="form-control input-md" type="text">
                        <span class="help-block"></span>
                    </div>
                </div>


                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pays">Pays</label>

                    <div class="col-md-4">
                        <select id="pays" name="pays" class="form-control">
                            @include('other.countries')
                        </select>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">

                    <label class="col-md-4 control-label" for="Description">Description</label>

                    <div class="col-md-4">
                        <textarea class="form-control" id="Description" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">

                    <label class="col-md-4 control-label" for="price">Prix</label>

                    <div class="col-md-4">
                        <input id="price" name="price" placeholder="" class="form-control input-md" type="number">
                        <span class="help-block"></span></div>
                </div>
                <div class="form-group">

                    <label class="col-md-4 control-label" for="quantity">Quntité</label>

                    <div class="col-md-4">
                        <input id="quantity" name="quantity" placeholder="" class="form-control input-md" type="number">
                        <span class="help-block"></span></div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userType">Type d'utilisateur</label>

                    <div class="col-md-4">
                        <select id="userType" name="userType" class="form-control">
                            <option value="societe">Société</option>
                            <option value="particulier">Particulier</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="type">Type d'opportunitée</label>

                    <div class="col-md-4">
                        <select id="type" name="type" class="form-control">
                            <option value="achat">Achat</option>
                            <option value="vente">Vente</option>
                            <option value="partenaire">Partenaire</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userType"></label>
                    <div class="col-md-6">
                        <button id="submit" name="submit" class="btn btn-success">
                            Publier
                        </button>
                    </div>
            </fieldset>

        </form>
    </div>

@endsection()