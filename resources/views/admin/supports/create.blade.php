<h1>Criar novo</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<form action={{ route('supports.store') }} method="POST">
    @csrf()
    <input type="text" name="subject" placeholder="assunto" value="{{ old('subject') }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>
