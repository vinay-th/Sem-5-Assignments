# 4. Write a Python program to select a random element from a list, set. Use random.choice()

import random

my_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

random_element = random.choice(my_list)
print("Randomly selected element:", random_element)

my_set = {'apple', 'banana', 'cherry', 'date', 'peach'}
random_element_set = random.choice(list(my_set))
print("Randomly selected element from set:", random_element_set)