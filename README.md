# TextPreprocessor
A preprocessor intended to clean one-to-many message(s).


# Example usage
```php
$messages = [
    "This is a sample message.",
    "Another example of a message.",
    "The quick brown fox jumps over the lazy dog."
];

$preprocessor = new TextPreprocessor();
$preprocessedMessages = $preprocessor->preprocessMessages($messages);

// Output preprocessed messages
foreach ($preprocessedMessages as $message) {
    echo $message . "\n";
}
```
