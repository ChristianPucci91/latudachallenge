
 <h1>Lista utenti</h1>
 @foreach (\App\User::all() as $user)
   <div class="">
     {{$user->name}} - {{$user->email}}  @if ($user->is_admin == 1) (Admin) @else (Giocatore) @endif
   </div>
 @endforeach
