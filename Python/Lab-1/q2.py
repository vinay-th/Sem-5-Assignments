# 2. Write a Python program that calculates the factorial of a number using a while loop.

num = int(input("Enter a number to get factorial of: "))
fact = 1
i = 1

while(i <= num):
    fact *= i
    i += 1

print(f"Factorial of {num} is {fact}")