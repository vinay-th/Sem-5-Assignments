# Given a list of integers, print the square of even numbers and cube of odd
# numbers using `enumerate()` and list comprehension.

numbers = [1, 2, 3, 4, 5]

# creating a result list
result = []
for i, num in enumerate(numbers): # using enumerate to get index and value of list
    if num % 2 == 0:
        result.append(num ** 2)
    else:
        result.append(num ** 3)
print("Result:", result)
