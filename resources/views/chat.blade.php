<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan AI</title>
</head>
<body>
    <h1>Chat dengan AI</h1>

    @if (isset($question))
        <p><strong>Anda:</strong> {{ $question }}</p>
    @endif

    @if (isset($answer))
        <p><strong>AI:</strong></p>
        <p>{{ $answer }}</p>
    @endif

    <form method="POST" action="{{ route('chat.send') }}">
        @csrf

        <textarea
            name="message"
            rows="5"
            cols="60"
            placeholder="Tulis pertanyaan..."
            required
        ></textarea>

        <br><br>

        <button type="submit">Kirim</button>
    </form>

    <br>

    <a href="{{ route('home') }}">Kembali ke Beranda</a>
</body>
</html>