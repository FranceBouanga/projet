<!-- resources/views/listapprenant.blade.php -->
<h2>Liste des apprenants</h2>

@foreach ($list as $apprenant) 
  <p> Nom : {{$apprenant->nom}} </p> 
  <p> Prenom :{{$apprenant->prenom}}</p> 
  <p> email :{{$apprenant->email}}</p> 
@endforeach