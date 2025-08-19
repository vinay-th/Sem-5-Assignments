# 7 Create two sets: even and prime numbers between 1–20. Find union,
# intersection, difference, and symmetric difference. Convert one to
# frozenset and try modifying it (handle the error).

def isPrime(num):
    if num < 2:
        return False
    for i in range(2, int(num ** 0.5) + 1):
        if num % i == 0:
            return False
    return True

# even
even_set = {x for x in range(1, 20) if x % 2 == 0}
prime_set = {x for x in range(1, 20) if isPrime(x) == True}

print(f"Union of even and prime set: {even_set.union(prime_set)}")
print(f"Intersection of even and prime set: {even_set.intersection(prime_set)}")
print(f"Difference of even and prime set: {even_set.difference(prime_set)}")
print(f"Symmetric Difference of even and prime set: {even_set.symmetric_difference(prime_set)}")

fs_even_set = frozenset(even_set)

try:
    fs_even_set.add(22)
except AttributeError as e:
    print("Kya be lawde Frozenset mai kaise add hoga")
