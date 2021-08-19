<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>


<pre>

#### JESUS CHIRST this piece of code is so cool


import nltk.sentiment
analyzer = nltk.sentiment.SentimentIntensityAnalyzer()

def main():
    while True:
        user_text = input('? ')
        score = get_sentiment(user_text)                                                ################# get sentiment and use user text. okay.
        reaction = get_reaction(score)                                                  ################# get reaction according to the score, okay.
        print(reaction)
        print(score)
        print('')

def get_reaction(score):
    """
    Parameter score: a float between -1 and +1
    Return: An emoji as a string!
    """
    if score > 0.5:  
        return "🥰"
    if score > 0:    
        return "🙂"
    if score == 0:   
        return "😶"
    if score < -0.5: 
        return "😢"
    if score < 0:    
        return "😟"

def get_sentiment(user_text):
    """
    Parameter user_text: any text (string)
    Return: a sentiment score between -1 and +1 (float)
    """
    # 1. pass the text into the analyzer.polarity_scores function, part of the nltk package
    scores = analyzer.polarity_scores(user_text)
    # 2. extract the sentiment score. Scores is a "dictionary" (covered on May 17th)
    sentiment_score = scores['compound']                                          ################ wa is das

    return sentiment_score

if __name__ == '__main__':
    main()

</pre>


<?php

include_once '../includes/footer.php';

?>