@extends ('sommaire')
@section('contenu1')
    <div id="contenu">
        <table>
            <thead>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Id</th>
            </thead>
            @foreach($lstVisiteurs as $unVisiteur)

                    <thead>
                        <td>{{$unVisiteur['nom']}}</td>
                        <td>{{$unVisiteur['prenom']}}</td>
                        <td>{{$unVisiteur['id']}}</td>
                        <td>
                            <a href="{{route('chemin_modifierVisiteur', ['id'=>$unVisiteur['id']])}}">modifier</a>
                        </td>
                        <td>
                            <a href="{{route('chemin_supprimerVisiteur', ['id'=>$unVisiteur['id']])}}">suppirmer</a>
                        </td>
                        <td>
                            <a href="{{route('chemin_pdf', ['id'=>$unVisiteur['id']])}}">pdf</a>
                        </td>
                    </thead>

            @endforeach
        </table>
        <br>
        <a href="{{route('chemin_ajouterVisiteur')}}">Ajouter</a>
    </div>
@endsection
