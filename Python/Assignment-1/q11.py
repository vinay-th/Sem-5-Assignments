# 10. Write a Python program that will demonstrate the use of Identity Operators.

a = [1, 2, 3]
b = [1, 2, 3]
c = a

print("a is b:", a is b) # False
print("a is c:", a is c) # True
print("a is not b:", a is not b) # True
print("a is not c:", a is not c) # False
