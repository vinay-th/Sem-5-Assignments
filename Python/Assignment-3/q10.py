# 10. Write a program to create a recursive function to calculate the sum of numbers from 0 to 10.

def add(x):
    if x <= 0:
        return 0
    else:
        return x + add(x - 1)

print(add(10))