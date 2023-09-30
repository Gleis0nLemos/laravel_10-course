<h1>Criar novo</h1>

<form action={{ route('supports.store') }} method="POST">
    @csrf()
    <input type="text" name="subject" placeholder="assunto">
    <textarea name="body" id="" cols="30" rows="5" placeholder="descrisção"></textarea>
    <button type="submit">Enviar</button>
</form>
