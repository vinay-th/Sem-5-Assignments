# 13. Write a function that takes two numbers and returns both their sum and difference.

def calculate_sum_and_difference(a, b):
    return a + b, a - b

# Test the function
result = calculate_sum_and_difference(10, 5)
print("Sum:", result[0])
print("Difference:", result[1])
