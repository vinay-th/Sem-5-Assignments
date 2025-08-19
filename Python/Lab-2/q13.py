# 13 Continuously accept numbers until user enters 0. Store in a list. Print
# max, min, sum, and count of even numbers.

numbers = []
inp = 1
while(inp != 0):
    inp = int(input("Enter a number (to stop enter 0): "))
    numbers.append(inp)

print("Max of numbers: ", max(numbers))
print("Min of numbers: ", min(numbers))
print("Sum of numbers: ", sum(numbers))

even_count = sum(1 for num in numbers if num % 2 == 0)
print("The count of even numbers: ", even_count)