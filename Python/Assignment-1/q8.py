# 7. Write a Python program to calculate the area of rectangle and square.

def areaOfRect(length, width):
    return length * width

def areaOfSqr(length):
    return length * length

print("-----------------For the area of square-----------------")
l1 = int(input("Enter the length of square: "))

print("The area of the square is: ", areaOfSqr(l1))

print("-----------------For the area of Rectangle-----------------")
l2 = int(input("Enter the length of rectangle: "))
b1 = int(input("Enter the breadth of rectangle: "))

print("The area of the rectangle is: ", areaOfRect(l2,b1))