# 1. Write a Python function to calculate the factorial of a number. Call the function for multiple test cases.

def factorial(n):
    if n == 0:
        return 1
    else:
        return n * factorial(n-1)

# Test cases
print(factorial(5))  # Output: 120
print(factorial(3))  # Output: 6
print(factorial(0))  # Output: 1