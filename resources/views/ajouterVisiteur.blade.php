@extends ('sommaire')
@section('contenu1')
    <div id="contenu">
        <form method="get" action="{{route('chemin_ajouterVisiteur2')}}">
            <input name="id" id="id">
            <label for="id">id</label><br><br>

            <input name="nom" id="nom">
            <label for="nom">nom</label><br><br>

            <input name="prenom" id="prenom">
            <label for="prenom">prénom</label><br><br>

            <input name="login" id="login">
            <label for="login">login</label><br><br>

            <input name="mdp" id="mdp">
            <label for="mdp">Mdp</label><br><br>

            <input name="adresse" id="adresse">
            <label for="adresse">adresse</label><br><br>

            <input name="cp" id="cp">
            <label for="cp">cp</label><br><br>

            <input name="ville" id="ville">
            <label for="ville">ville</label><br><br>

            <input name="dateEmbauche" id="dateEmbauche">
            <label for="dateEmbauche">Date Embauche</label><br><br>
            <button>Ajouter</button>
        </form>
    </div>
@endsection
