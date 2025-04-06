from textblob import TextBlob
import sys

positive_words = {"delicious", "tasty", "amazing", "great", "excellent", "perfect", "fantastic", "yummy", "fresh"}
negative_words = {"horrible", "bad", "worst", "yuck", "awful", "disgusting", "cold", "burnt", "stale", "slow", "rude", "di malasa"}

def handle_negations(text):
    """ Handle negations like 'not delicious' """
    words = text.lower().split()
    for i in range(1, len(words)):
        if words[i-1] == "not" and words[i] in positive_words:
            # If "not" is before a positive word, make it negative
            words[i] = "not_" + words[i]
        elif words[i-1] == "not" and words[i] in negative_words:
            # If "not" is before a negative word, make it positive
            words[i] = "not_" + words[i]
    return " ".join(words)

def analyze_sentiment(text):
    # Handle negations in the text first
    modified_text = handle_negations(text)
    
    analysis = TextBlob(modified_text)
    words = set(modified_text.split())

    # Check for strong positive or negative keywords
    contains_positive = any(word in words for word in positive_words)
    contains_negative = any(word in words for word in negative_words)

    # Determine sentiment
    # If TextBlob's polarity is very close to neutral but we have strong keywords, override
    if analysis.sentiment.polarity > 0 or contains_positive:
        sentiment = "positive"
    elif analysis.sentiment.polarity < 0 or contains_negative:
        sentiment = "negative"
    else:
        # Special check for negations or strong keywords leading to neutral -> negative
        if contains_negative or "not_" in modified_text:
            sentiment = "negative"
        else:
            sentiment = "neutral"

    return sentiment

if __name__ == "__main__":
    text = " ".join(sys.argv[1:])
    print(analyze_sentiment(text))
