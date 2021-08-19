<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

"""
Implements the game of Rock-Paper-Scissors!

History:
This classic game dates back to the Han Dinesty, over 2200 years ago.
The First International Rock-Paper-Scissors Programming Competition 
was held in 1999 and was won by a team called "Iocaine Powder"

The Game:
Each player choses a move (simultaneously) from the choices:
rock, paper or scissors. 
If they chose the same move the game is a tie. Otherwise:
rock beats scissors
scissors beats paper
paper beats rock.

In this program a human plays against an AI. The AI choses randomly
(we promise). The game is repeated N_GAMES times and the human gets
a total score. Each win is worth +1 points, each loss is worth -1
"""
import random

N_GAMES = 3

def main():
    print_welcome()


    # 1. get the ai move 
    ai_move = get_ai_move()
    human_move = get_human_move() 

    winner = get_winner(get_ai_move, get_human_move)             # if you pass this piece of info, it has chance to figure out who the winner is  
    print('ai move was ', ai_move)
    print('human move was ', human_move)
    print('winner was ', winner)

def get_winner(ai_move, human_move):
    """
    return either "ai", "human" or "tie"
    """
    if ai_move == human_move:
        return 'tie'
    if ai_move == 'rock':
        if human_move == "scissors":
            return "ai"
        return 'human'
    if ai_move == 'paper':
        if human_move == "rock":
            return "ai"
        return "human"
    if ai_move == 'scissors':
        if human_move == "rock":
            return "human"
        return "ai"

def get_ai_move():
    return 'rock'

def get_human_move():
    while True:
        human_move = input('enter your move ')
        if is_valid_move(human_move):
            return human_move
        print('invalid move')

def is_valid_move(move):
    """
    parameter move : as sring repressenting what hte user entered
    return: boolean which is true if the move was valid
    """

    if move == 'rock':
        return True
    if move == 'paper':
        return True
    if move == 'scissors':
        return True
    return False
    


def print_welcome():
    print('Welcome to Rock Paper Scissors')
    print('You will play '+str(N_GAMES)+' games against the AI')
    print('rock beats scissors')
    print('scissors beats paper')
    print('paper beats rock')
    print('----------------------------------------------')
    print('')

if __name__ == '__main__':
    main()

</pre>

<?php

include_once '../includes/footer.php';

?>