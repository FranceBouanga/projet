<!-- resources/views/listformation.blade.php -->

<h2>Liste des formations</h2>

@foreach ($liste as $apprenant) 
 <p> Nom : {{$apprenant->nom}} </p> 
 <p> chefdp :{{$apprenant->chefdp}}</p> 
@endforeach