<h1>Editar dúvida</h1>

<form action={{ route('supports.update', $support->id) }} method="POST">
    @csrf()
    @method('PUT')
    <input type="text" name="subject" placeholder="assunto" value="{{ $support->subject }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="descrisção">{{ $support->body }}</textarea>
    <button type="submit">Editar</button>
</form>
