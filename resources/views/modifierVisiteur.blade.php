@extends ('sommaire')
@section('contenu1')
    <div id="contenu">
        <form method="get" action="{{route('chemin_modifierVisiteur2')}}">
            <input type="hidden" name="id" id="id" value="{{$infoVisiteur["id"]}}">

            <input name="nom" id="nom" value="{{$infoVisiteur["nom"]}}">
            <label for="nom">nom</label><br>

            <input name="prenom" id="prenom" value="{{$infoVisiteur["prenom"]}}">
            <label for="prenom">prénom</label><br>

            <input name="login" id="login" value="{{$infoVisiteur["login"]}}">
            <label for="login">login</label><br>

            <input name="mdp" id="mdp" value="{{$infoVisiteur["mdp"]}}">
            <label for="mdp">Mdp</label><br>

            <input name="adresse" id="adresse" value="{{$infoVisiteur["adresse"]}}">
            <label for="adresse">adresse</label><br>

            <input name="cp" id="cp" value="{{$infoVisiteur["cp"]}}">
            <label for="cp">cp</label><br>

            <input name="ville" id="ville" value="{{$infoVisiteur["ville"]}}">
            <label for="ville">ville</label><br>

            <input name="dateEmbauche" id="dateEmbauche" value="{{$infoVisiteur["dateEmbauche"]}}">
            <label for="dateEmbauche">Date Embauche</label><br>
            <button>modifier</button>
        </form>
    </div>
@endsection
