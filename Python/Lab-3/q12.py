# 12.Write a Python program using lambda to filter all even numbers from a given list.

getEven = lambda x: x % 2 == 0

numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
even_numbers = list(filter(getEven, numbers))
print(even_numbers)
