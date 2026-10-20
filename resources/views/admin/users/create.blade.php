<h1> Novo Usuario</h1>

<form action="{{route('users.store')}}" method="POST">
    @csrf
    {{-- <input type="text" name="_token" value="{{ csrf_token()}}"> --}}
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="Email" placeholder="Email">
    <input type="password" name="senha" placeholder="senha">
    <button type="submit">Enviar </button>
</form>