# 25 Create a number guessing game where the program randomly picks a
# number from 1 to 100, and the user has to guess it in limited attempts (use
# loop + conditions).
import random

number_to_guess = random.randint(1, 100)

number_guessed = int(input("Guess a number between 1 and 100: "))

while number_guessed != number_to_guess:
    if number_guessed < number_to_guess:
        print("Too low!")
    else:
        print("Too high!")

    number_guessed = int(input("Guess again: "))

print("Congratulations! You've guessed the number.")