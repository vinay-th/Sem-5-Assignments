# 8. Write a Python program to swap of two numbers.
a = int(input("Enter the first number: "))
b = int(input("Enter the second number: "))

print("-------------Before swap-------------")
print("The first number: ", a)
print("The first number: ", b)

a = a + b;
b = a - b;
a = a - b;

print("-------------After swap-------------")
print("The first number: ", a)
print("The first number: ", b)
