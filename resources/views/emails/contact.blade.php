<html>
<head>
    <title>Natalia Schlossberg website</title>
</head>
<body>
<h3>{{ $payload['name'] }} posted a question on your website</h3>
<div style="text-emphasis: #0b2e13">{{ $payload['email'] }}</div>
<div style="text-align: justify">{{ $payload['text'] }}</div>
</body>
</html>
