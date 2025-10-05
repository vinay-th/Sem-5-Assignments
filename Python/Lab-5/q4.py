# 4 Write a program to divide one number from another number with exception handling and show ZeroDivisionError.

dividend = int(input("Enter the dividend: "))
divisor = int(input("Enter the divisor: "))

try:
    res = dividend / divisor

    print(f"{dividend} / {divisor} = {res}")
except ZeroDivisionError:
    print("Division by zero is not allowed, itna nai aata bhadwe")