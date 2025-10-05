# 9. Create an outer function that will accept two parameters a and b. Create an inner function
# inside an outer function that will calculate the addition of a and b. At last, an outer function
# will add 5 into addition and return it.

def outer_func(n1, n2):
    def inner_func():
        return n1 + n2
    
    return inner_func() + 5

x = int(input("Enter first number: "))
y = int(input("Enter second number: "))

print(f"Final result: {outer_func(x, y)}")