# Create a list of 10 random numbers and remove all elements greater than
# the average of the list. Display final list.

import random


numbers = []

for _ in range(10):
    numbers.append(random.randint(1, 100))  # Generate random numbers between 1 and 100

print("Original list:", numbers)

average = sum(numbers) / len(numbers)
print("Average of original list:", average)
numbers = [num for num in numbers if num <= average]

print("Final list:", numbers)