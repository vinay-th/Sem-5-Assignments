# 6. Write a program to create function calculation () such that it can accept two variables and
# calculate addition and subtraction. Also, it must return both addition and subtraction in a
# single return call.

def calculations(n1, n2):
    return n1 + n2, n1 - n2

n1 = float(input("Enter your 1st number: "))
n2 = float(input("Enter your 2nd number: "))

add, sub = calculations(n1, n2)

print(f"Addition of {n1:.2f} + {n2:.2f} = {add:.2f}")
print(f"Subtraction of {n1:.2f} - {n2:.2f} = {sub:.2f}")