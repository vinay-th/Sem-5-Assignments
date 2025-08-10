# 12. Write a Python program to demonstrate the use of random function.
import random

print("Random integer between 1 and 100:", random.randint(1, 100))
print("Random float between 0 and 1:", random.random())
print("Random choice from a list:", random.choice(['apple', 'banana', 'cherry']))
print("Random sample of 3 elements from a list:", random.sample([1, 2, 3, 4, 5], 3))