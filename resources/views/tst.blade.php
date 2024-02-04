<!-- extractedText.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Résultats d'extraction</title>
</head>
<body>
    <h1>Titres extraits :</h1>
    <ul>
        @foreach($result['titles'] as $title)
            <li>{{ $title }}</li>
        @endforeach
    </ul>

    <h1>Paragraphes extraits :</h1>
    @foreach($result['paragraphs'] as $title => $paragraph)
        <h2>{{ $title }}</h2>
        <p>{{ $paragraph }}</p>
    @endforeach
</body>
</html>
