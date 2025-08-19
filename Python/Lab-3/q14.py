# 14. Write a generator function that yields the square of numbers from 1 to 10.

def generate_squares():
    for i in range(1, 11):
        yield i ** 2

# Test the generator
for square in generate_squares():
    print(square)
