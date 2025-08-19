# 4 Accept a tuple of 10 integers. Count even and odd numbers. Extract
# prime numbers into a new tuple. Display max, min, and sum of the new
# tuple.

def isPrime(num):
    if num < 2:
        return False
    for i in range(2, int(num ** 0.5) + 1):
        if num % i == 0:
            return False
    return True
        

myTuple = tuple(int(input("Enter a number: ")) for i in range(10))

primeTuple = tuple(n for n in myTuple if isPrime(n))
print(f"The prime numbers in tuple arranged in new tuple: {primeTuple}")

print(f"The min number in tuple is: {min(myTuple)}")
print(f"The max number in tuple is: {max(myTuple)}")
print(f"The sum of numbers in tuple is: {sum(myTuple)}")
