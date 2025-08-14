# Take 10 user inputs. If the number is prime, skip it (use `continue`). If it is divisible by 10, stop the loop (use `break`). Use `else` to confirm normal loop completion.

def isPrime(n):
    if n <= 1:
        return False
    for i in range(2, int(n ** 0.5) + 1): # n½ + 1 OR √n + 1
        if n % i == 0:
            return False
    return True

# Using _ as a throwaway(temporary) variable
for _ in range(10):
    num = int(input("Enter a number: "))
    if isPrime(num):
        print(f"{num} is a prime number, skipping.")
        continue  # Skip prime numbers
    else:
        if num % 10 == 0:
            print("Divisible by 10, stopping the loop.")
            break  # Stop the loop if divisible by 10
        else:
            print("Number: ", num)