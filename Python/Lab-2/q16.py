# 16 Accept 10 numbers. Create a second list with even numbers only. Count
# frequency of each even number using `count()` method.

numbers = []
for i in range(10):
    num = int(input(f"Enter number {i + 1}: "))
    numbers.append(num)

even_numbers = [num for num in numbers if num % 2 == 0]
print("Even numbers:", even_numbers)

for even in even_numbers:
    print(f"Frequency of {even}: {numbers.count(even)}")