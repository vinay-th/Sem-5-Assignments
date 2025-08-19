# 2. Write a function to find the largest of three numbers.

def largest_of_three(a, b, c):
    if a > b and a > c:
        return a
    elif b > c:
        return b
    else:
        return c

# Test cases
print(largest_of_three(5, 10, 3))  # Output: 10
print(largest_of_three(7, 2, 9))   # Output: 9
print(largest_of_three(1, 1, 1))   # Output: 1