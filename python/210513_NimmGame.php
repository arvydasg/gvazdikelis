<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

# start of the code
def main():
    stones_left = 20

    player_1 = 0
    player_2 = 0

    ########################################

    print('There are', str(stones_left), 'stones left')

    ########################################


    while stones_left > 0:
        
        user_input = int(input('Player 1 would you like to remove 1 or 2 stones? '))

        if user_input > 2 or user_input == 0:
            user_input = int(input('Please enter 1 or 2: '))
            player_1 += 1                                                                       ############ wtf tai sitos eilutes net nereikia?

        stones_left -= user_input
        if stones_left == 0:
            print('\nPlayer 2 wins!')
            break


#########################################



        print('\nThere are', str(stones_left), 'stones left')
        user_input = int(input('Player 2 would you like to remove 1 or 2 stones? '))

        if user_input > 2 or user_input == 0:
            user_input = int(input('Please enter 1 or 2: '))
            player_2 += 1                                                                       ############ wtf tai sitos eilutes net nereikia?
        
        stones_left -= user_input
        if stones_left == 0:
            print('\nPlayer 1 wins!')
            break
    
        print('\nThere are', str(stones_left), 'stones left')





if __name__ == '__main__':
    main()



###################################################################################
# Siek tiek prabangus, su tais invalid ir amount in brackets #
##################################################################################


"""


def main():
    player_1=1
    player_2=0
    stones=20
    while stones>0:
        print("There are "+str(stones)+" stones left")
        if(player_1):
            one_take=int(input("Player 1 would you like to remove 1 or 2 stones? "))
            if(one_take !=1 and one_take !=2):                                          ########## Inovacija, mldc. kiek daug budu atlikti ta pacia uzduoti
                one_take=invalid(one_take)
            stones=stones-one_take
            player_1=0
            player_2=1
            print("")

        else:
            two_take=int(input("Player 2 would you like to remove 1 or 2 stones? "))
            if(two_take !=1 and two_take !=2):
                two_take=invalid(two_take)
            stones=stones-two_take
            player_1=1
            player_2=0
            print("")

    if(player_1):
        print("Player 1 wins!")                                                         ########## ta prasme if(player1)???????? if player 1 what?
    else:
        print("Player 2 wins!")



def invalid(amount):
    while(amount !=1 and amount !=2):
        amount = int(input("Please enter 1 or 2: "))
    return amount

if __name__ == '__main__':
    main()

"""




###################################################################################
# CANT UNDERSTADN THE PLAYERS #
##################################################################################

"""
Game of Nimm. 2 players pick 1 or 2 stones in turns. The player that
pickes the last stone loses.

TOTAL_STONES = 20 #constant.

def main():
    TOTAL_STONES = 20 



    while TOTAL_STONES > 0: #condition for player1 to pick stones


        print("There are " + str(TOTAL_STONES) + " stones left")
        pick_stone = int(input("Player 1 would you like to remove 1 or 2 stones? "))
        while pick_stone < 1 or pick_stone > 2: 
            TOTAL_STONES = TOTAL_STONES 
            pick_stone = int(input("Please enter 1 or 2: ")) 
        print("")
        TOTAL_STONES -= pick_stone



        if TOTAL_STONES == 0 or TOTAL_STONES == -1: #checks to see if we have a winner 
            print("Player 2 wins!")

        if TOTAL_STONES > 0:


            print("There are " + str(TOTAL_STONES) + " stones left")
            pick_stone = int(input("Player 2 would you like to remove 1 or 2 stones? "))
            while pick_stone < 1 or pick_stone > 2:
                pick_stone = int(input("Please enter 1 or 2: "))
                TOTAL_STONES = TOTAL_STONES
            print("")
            TOTAL_STONES -= pick_stone


            if TOTAL_STONES == 0 or TOTAL_STONES == -1:
                print("Player 1 wins!")


if __name__ == '__main__':
    main()
"""



###################################################################################
# BELOW IS MINE #
##################################################################################

"""
def main():
    print("")
    print("---------------------------------------------------------------------------------------------")
    print("WELCOME to the ARVY NIMM GAME")
    print("It is taking me ages to solve this game")
    print("But I love this process and myself acually learning instead of sitting in a tutorial hell")
    print("---------------------------------------------------------------------------------------------")

# total amount of stones before the game begins
    stones_total = 20

# first time asking for the user of his number, just a demo one 
    print("")
    print("There are", int(stones_total), "stones left")
    pick_stone = int(input("Player 1 would you like to remove 1 or 2 stones WHAAZAA? "))
    while pick_stone < 1 or pick_stone > 2 :
        print("Invalid pick!")
        pick_stone = int(input("Please pick a number 1 or 2 only! "))
    
    stones_total -= int(pick_stone)





# normal while loop is happening until the game finishes (runs out of stones)

    while stones_total > 0:
            print("There are", int(stones_total), "stones left")
            pick_stone = int(input("Player 1 ould you like to remove 1 or 2 stones? "))
            while pick_stone < 1 or pick_stone > 2 :
                print("Invalid pick!")
                pick_stone = int(input("Please pick a number 1 or 2 only! "))
            stones_total -= int(pick_stone)



    print("")
    print("Game over")
    
        



if __name__ == '__main__':
    main()


"""

</pre>

<?php

include_once '../includes/footer.php';

?>