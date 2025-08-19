# 9. Write a function using *varargs to calculate the average of any number of numeric arguments.

def calculate_average(*args):
    if not args:
        return 0
    return sum(args) / len(args)

# Test cases
print(calculate_average(10, 20, 30)) # 20.0
print(calculate_average(5, 15))      # 10.0
print(calculate_average())            # 0