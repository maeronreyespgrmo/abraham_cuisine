from textblob import TextBlob
import sys

# Define restaurant-related positive and negative keywords
# positive_words = {"delicious", "tasty", "amazing", "great", "excellent", "perfect", "fantastic", "yummy", "fresh", "friendly"}
# negative_words = {"horrible", "bad", "worst","yuck","awful", "disgusting", "cold", "burnt", "stale", "slow", "rude", "di malasa"}
positive_words = {
    "delicious", "tasty", "amazing", "great", "excellent", "perfect", "fantastic", "yummy", "fresh", "friendly",
    "savory", "succulent", "juicy", "mouthwatering", "scrumptious", "appetizing", "flavorful", "delectable",
    "heavenly", "satisfying", "sumptuous", "exquisite", "divine", "wonderful", "spectacular", "impressive",
    "outstanding", "superb", "exceptional", "magnificent", "splendid", "phenomenal", "top-notch", "five-star",
    "extraordinary", "gourmet", "homemade", "authentic", "wholesome", "aromatic", "fragrant", "crispy", "tender",
    "buttery", "silky", "velvety", "creamy", "smooth", "rich", "bold", "zesty", "spiced", "balanced", "freshly-made",
    "organic", "premium", "high-quality", "seasoned", "perfectly-cooked", "chef's kiss", "bursting-with-flavor",
    "irresistible", "mouthwatering", "finger-licking", "toothsome", "comforting", "soul-warming", "heartwarming",
    "satisfying", "refreshing", "crave-worthy", "tempting", "hearty", "nourishing", "pleasing", "palatable",
    "delightful", "light-and-fluffy", "tangy", "sweet", "fruity", "nutty", "smoky", "caramelized", "honeyed",
    "spicy", "peppery", "savory-sweet", "umami", "roasted", "grilled", "charred", "seared", "glazed", "marinated",
    "braised", "tenderized", "handcrafted", "artisanal", "signature", "innovative", "fusion", "elevated", "well-plated",
    "garnished", "eye-catching", "beautifully-presented", "aesthetic", "Instagram-worthy", "picture-perfect",
    "gorgeous", "vibrant", "colorful", "well-balanced", "well-cooked", "moist", "flaky", "airy", "delicately-seasoned",
    "sophisticated", "elegant", "light-and-crisp", "silky-smooth", "melt-in-your-mouth", "divinely-prepared",
    "heavenly-texture", "golden-brown", "flawless", "well-done", "thoughtfully-prepared", "expertly-cooked",
    "full-bodied", "fragrant-aroma", "whiff-of-perfection", "enticing", "captivating", "dreamy", "extra-flavorful",
    "nostalgic", "old-fashioned-goodness", "modern-twist", "bold-and-tasty", "simple-yet-delicious",
    "nothing-short-of-perfect", "satisfyingly-rich", "earthy", "creatively-plated", "sensational",
    "next-level-delicious", "out-of-this-world", "pleasantly-surprised", "a-cut-above", "stands-out",
    "worth-the-hype", "hearty-meal", "homely-flavors", "bursting-with-goodness", "fantastically-seasoned",
    "gold-standard", "showstopper", "foodie-approved", "mind-blowing", "indulgent", "tantalizing", "explosion-of-flavors",
    "mood-lifting", "restaurant-quality", "chef-recommended", "velvety-smooth", "piping-hot", "cooked-to-perfection",
    "crispy-crunchy", "lightly-sweetened", "zesty-and-fresh", "extra-cheesy", "melty", "chewy", "bouncy", "juicy-bite",
    "warm-and-toasty", "flavor-packed", "moist-and-decadent", "sweet-and-savory", "perfectly-balanced", "refreshingly-cool",
    "silky-rich", "cloud-like", "irresistibly-good", "one-of-a-kind", "soul-satisfying", "lovingly-prepared",
    "delicately-balanced", "happiness-on-a-plate", "makes-your-day", "brightens-your-mood", "comfort-food-perfection",
    "restaurant-worthy", "worth-the-wait", "impeccable", "divine-dining", "pure-bliss", "masterfully-crafted",
    "extra-crunchy", "perfectly-layered", "luxurious", "lip-smacking", "super-satisfying", "wholesomely-good",
    "burst-of-joy", "warm-and-inviting", "finely-textured", "pleasure-in-every-bite", "addictive", "deeply-satisfying",
    "joyful", "golden-and-crisp", "soft-and-chewy", "sweetly-satisfying", "meltingly-good", "delightfully-tender",
    "expertly-flavored", "scrumptiously-good", "simply-amazing", "balanced-and-nuanced", "made-with-love",
    "thoughtfully-curated", "expertly-executed", "royally-good", "a-symphony-of-flavors", "nostalgically-good",
    "finest-quality", "superb-texture", "mouth-explosion", "impressively-delicious", "vividly-flavored", "chewy-goodness",
    "creamy-and-rich", "charmingly-simple", "a-guilty-pleasure", "bursting-with-taste", "full-of-character",
    "harmoniously-blended", "top-tier", "crafted-with-care", "brilliantly-prepared", "absolutely-flawless",
    "sweetly-intense", "luxuriously-decadent", "satisfyingly-tangy", "perfectly-smooth", "aromatically-pleasing",
    "bold-and-complex", "multidimensional-flavors", "genius-combination", "heaven-on-earth", "extraordinary-texture",
    "celebration-of-flavors", "swoon-worthy", "too-good-to-be-true", "must-try", "euphoric", "delightfully-surprising",
    "epic", "next-level-goodness", "unforgettable", "drool-worthy", "dream-like", "chef’s-masterpiece", "exciting",
    "full-of-life", "all-time-favorite", "joy-on-a-plate", "homestyle-perfection", "guilt-free-pleasure",
    "refined", "special-occasion-worthy", "mindfully-crafted", "reminiscent-of-childhood", "essence-of-joy",
    "every-bite-counts", "perfection-in-simplicity", "uniquely-delicious", "irreplaceable", "endlessly-satisfying",
    "refreshingly-simple", "passion-on-a-plate", "true-artistry", "elevated-dining", "top-of-the-line", "heaven-sent",
    "too-good-to-share", "every-bit-worth-it", "one-in-a-million", "deliriously-good", "a-hug-in-a-bowl",
    "makes-you-smile", "impossibly-delicious", "undeniably-tasty", "gloriously-yummy", "deliriously-satisfying"
}
negative_words = {
    "horrible", "bad", "worst", "yuck", "awful", "disgusting", "cold", "burnt", "stale", "slow", "rude", "di malasa",
    "terrible", "nasty", "gross", "unpleasant", "bland", "tasteless", "overcooked", "undercooked", "spoiled", "soggy",
    "greasy", "oily", "hard", "tough", "rubbery", "dry", "salty", "sour", "bitter", "inedible", "unhygienic", "filthy",
    "dirty", "rotten", "moldy", "expired", "sickening", "repulsive", "unbearable", "frustrating", "displeasing",
    "unacceptable", "unappetizing", "horrendous", "dreadful", "atrocious", "pathetic", "disastrous", "lackluster",
    "inferior", "cheap", "fake", "phony", "low-quality", "poor", "mediocre", "subpar", "underwhelming", "annoying",
    "irritating", "offensive", "insulting", "disrespectful", "unfriendly", "unprofessional", "careless", "lazy",
    "neglectful", "unreliable", "dishonest", "deceptive", "fraudulent", "misleading", "untruthful", "arrogant",
    "condescending", "snobby", "selfish", "inconsiderate", "incompetent", "clueless", "reckless", "thoughtless",
    "insensitive", "obnoxious", "aggressive", "hostile", "uncooperative", "argumentative", "combative", "pushy",
    "stubborn", "ruthless", "corrupt", "greedy", "manipulative", "two-faced", "betrayal", "backstabbing",
    "disloyal", "hypocritical", "dishonorable", "unethical", "immoral", "illegal", "criminal", "unjust",
    "unfair", "biased", "prejudiced", "discriminatory", "sexist", "racist", "bigoted", "hateful", "malicious",
    "spiteful", "vindictive", "vengeful", "resentful", "jealous", "envious", "bitter", "grumpy", "moody",
    "grouchy", "testy", "short-tempered", "hot-headed", "explosive", "furious", "outraged", "livid", "fuming",
    "hostile", "belligerent", "antagonistic", "violent", "brutal", "savage", "barbaric", "cruel", "merciless",
    "heartless", "cold-hearted", "ruthless", "unfeeling", "insensitive", "unsympathetic", "harsh", "stern",
    "rigid", "inflexible", "stiff", "uncompromising", "unyielding", "oppressive", "tyrannical", "dictatorial",
    "controlling", "domineering", "overbearing", "bossy", "nagging", "picky", "nitpicky", "fussy", "demanding",
    "impatient", "restless", "jittery", "nervous", "anxious", "worried", "fearful", "paranoid", "insecure",
    "doubtful", "skeptical", "cynical", "pessimistic", "defensive", "guilty", "ashamed", "humiliated", "embarrassed",
    "awkward", "uncomfortable", "cringeworthy", "painful", "excruciating", "agonizing", "miserable", "depressed",
    "hopeless", "desperate", "defeated", "crushed", "shattered", "devastated", "broken", "melancholy", "tearful",
    "mournful", "sorrowful", "grief-stricken", "lonely", "isolated", "abandoned", "neglected", "forgotten",
    "ignored", "overlooked", "invisible", "worthless", "insignificant", "pointless", "meaningless", "purposeless",
    "useless", "unimportant", "irrelevant", "trivial", "shallow", "superficial", "vain", "empty", "hollow",
    "lifeless", "dull", "boring", "uninteresting", "monotonous", "tedious", "repetitive", "tiresome", "draining",
    "exhausting", "overwhelming", "stressful", "frustrating", "discouraging", "disheartening", "demoralizing",
    "deflating", "depressing", "suffocating", "oppressive", "stifling", "confining", "restrictive", "limiting",
    "trapped", "helpless", "powerless", "defenseless", "vulnerable", "weak", "frail", "feeble", "fragile",
    "unstable", "unsteady", "unpredictable", "chaotic", "disorganized", "messy", "cluttered", "filthy",
    "polluted", "contaminated", "toxic", "hazardous", "dangerous", "risky", "threatening", "menacing",
    "harmful", "damaging", "destructive", "devastating", "catastrophic", "tragic", "disastrous", "fatal",
    "deadly", "lethal", "poisonous", "venomous", "brutal", "vicious", "savage", "ruthless", "cruel",
    "barbaric", "inhumane", "beastly", "monstrous", "grotesque", "hideous", "ghastly", "horrifying",
    "terrifying", "nightmarish", "spooky", "eerie", "creepy", "sinister", "ominous", "demonic",
    "evil", "wicked", "corrupt", "villainous", "fiendish", "diabolical", "treacherous", "traitorous",
    "backstabbing", "deceitful", "cunning", "sly", "underhanded", "sneaky", "shady", "dubious",
    "suspicious", "fishy", "questionable", "untrustworthy", "dishonest", "fraudulent", "scandalous",
    "outrageous", "shocking", "appalling", "atrocious", "abominable", "detestable", "revolting",
    "repugnant", "repulsive", "offensive", "disgusting", "sickening", "vomit-inducing", "nauseating",
    "loathsome", "abhorrent", "despicable", "vile", "foul", "putrid", "rank", "rancid", "stench-filled",
    "suffocating", "gag-inducing", "skunky", "moldy", "milky", "curdled", "rotten", "decayed", "worm-infested",
    "infested", "infamous", "notorious", "scummy", "scandalous", "shameless", "depraved", "perverse",
    "twisted", "warped", "disturbed", "psychotic", "deranged", "unhinged", "lunatic", "mad", "insane", "not delicious"
}

def analyze_sentiment(text):
    analysis = TextBlob(text)
    words = set(text.lower().split())

    # Check for strong positive or negative keywords
    contains_positive = any(word in words for word in positive_words)
    contains_negative = any(word in words for word in negative_words)

    # Determine sentiment
    if analysis.sentiment.polarity > 0 or contains_positive:
        sentiment = "positive"
    elif analysis.sentiment.polarity < 0 or contains_negative:
        sentiment = "negative"
    else:
        sentiment = "neutral"

    return sentiment

if __name__ == "__main__":
    text = " ".join(sys.argv[1:])
    print(analyze_sentiment(text))
