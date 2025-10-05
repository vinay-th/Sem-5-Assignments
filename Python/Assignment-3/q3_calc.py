# 3. Write a Python program to create a module called calculator.py with add (), sub(), mul(), div()
# and call this module into another file named calc.py using from… import syntax.
from calculator import add, sub, mul, div

print("Addition : ", add(10, 5))
print("Subtraction : ", sub(10, 5))
print("Multiplication : ", mul(10, 5))
print("Division : ", div(10, 5))