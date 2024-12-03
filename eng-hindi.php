<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type in English and See Hindi Translation</title>
    <script>
        // Function to initialize Google Input Tools after script loads
        function initializeGoogleInputTools() {
            if (google && google.elements) {
                google.elements.transliteration.configure({
                    sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                    destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
                    shortcutKey: 'ctrl+g',
                    transliterationEnabled: true
                });
                google.elements.transliteration.makeTransliteratable(['englishText']);
            } else {
                console.error('Google Input Tools API did not load correctly.');
            }
        }
    </script>
    <script src="https://www.gstatic.com/inputtools/js/loader.js" onload="initializeGoogleInputTools()"></script>
</head>
<body>
    <h1>Type in English and See Hindi Translation</h1>
    <input type="text" id="englishText" placeholder="Type in English" />
    <br><br>
    <input type="text" id="hindiText" readonly placeholder="Hindi Translation" />
</body>
</html>
