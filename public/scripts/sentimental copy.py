from textblob import TextBlob
import sys

def analyze_sentiment(text):
    analysis = TextBlob(text)
    if analysis.sentiment.polarity > 0:
        return "positive"
    elif analysis.sentiment.polarity < 0:
        return "negative"
    else:
        return "neutral"

if __name__ == "__main__":
    text = " ".join(sys.argv[1:])
    print(analyze_sentiment(text))