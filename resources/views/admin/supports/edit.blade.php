<h1>Editar dúvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<form action={{ route('supports.update', $support->id) }} method="POST">
    @csrf()
    @method('PUT')
    <input type="text" name="subject" placeholder="assunto" value="{{ $support->subject }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="descrisção">{{ $support->body }}</textarea>
    <button type="submit">Editar</button>
</form>
