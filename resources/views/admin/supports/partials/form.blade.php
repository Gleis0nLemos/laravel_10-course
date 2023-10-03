@csrf()
    <input type="text" name="subject" placeholder="assunto" value="{{ $support->subject ?? old('subject') }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="descrição">{{ $support->body ?? old('body') }}</textarea>
    <button type="submit">Enviar</button>