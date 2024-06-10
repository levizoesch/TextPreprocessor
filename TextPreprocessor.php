// Written from reading https://www.analyticsvidhya.com/blog/2021/09/essential-text-pre-processing-techniques-for-nlp/
class TextPreprocessor
{
    private $stopwords;

    public function __construct()
    {
        $this->stopwords = [
            'i', 'me', 'my', 'myself', 'we', 'our', 'ours', 'ourselves', 'you', 'your', 'yours', 'yourself', 'yourselves',
            'he', 'him', 'his', 'himself', 'she', 'her', 'hers', 'herself', 'it', 'its', 'itself', 'they', 'them', 'their',
            'theirs', 'themselves', 'what', 'which', 'who', 'whom', 'this', 'that', 'these', 'those', 'am', 'is', 'are', 'was',
            'were', 'be', 'been', 'being', 'have', 'has', 'had', 'having', 'do', 'does', 'did', 'doing', 'a', 'an', 'the',
            'and', 'but', 'if', 'or', 'because', 'as', 'until', 'while', 'of', 'at', 'by', 'for', 'with', 'about', 'against',
            'between', 'into', 'through', 'during', 'before', 'after', 'above', 'below', 'to', 'from', 'up', 'down', 'in', 'out',
            'on', 'off', 'over', 'under', 'again', 'further', 'then', 'once', 'here', 'there', 'when', 'where', 'why', 'how',
            'all', 'any', 'both', 'each', 'few', 'more', 'most', 'other', 'some', 'such', 'no', 'nor', 'not', 'only', 'own',
            'same', 'so', 'than', 'too', 'very', 's', 't', 'can', 'will', 'just', 'don', 'should', 'now'
        ];
    }

    // Preprocess a single text message
    public function preprocessText($text)
    {
        // Convert to lowercase
        $text = strtolower($text);
        // Remove punctuation
        $text = preg_replace('/[^\w\s]/', '', $text);
        // Tokenization (simple split by space)
        $tokens = explode(' ', $text);
        // Remove stopwords
        $tokens = array_diff($tokens, $this->stopwords);
        // Remove empty tokens
        $tokens = array_filter($tokens);
        // Join tokens back into a string
        $preprocessed_text = implode(' ', $tokens);

        return $preprocessed_text;
    }

    // Preprocess a group of messages
    public function preprocessMessages(array $messages)
    {
        $preprocessedMessages = [];
        foreach ($messages as $message) {
            $preprocessedMessages[] = $this->preprocessText($message);
        }

        return $preprocessedMessages;
    }
}
