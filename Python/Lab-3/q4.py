# 4. Write a function that takes a list of numbers as input and returns the sum of all numbers.

def sum_of_numbers(numbers):
    total = 0
    for num in numbers:
        total += num
    return total

# Test cases
print(sum_of_numbers([1, 2, 3, 4, 5]))  # Output: 15
print(sum_of_numbers([-1, 1, 0]))       # Output: 0
print(sum_of_numbers([]))                # Output: 0
