# Write a program to input a tuple of strings and find how many strings
# contain only vowels.

def contains_only_vowels(s):
    vowels = "aeiouAEIOU"
    for char in s:
        if char not in vowels:
            return False
    return True

strings = tuple(input("Enter a string: ") for _ in range(5))
count = sum(1 for s in strings if contains_only_vowels(s))

print("Number of strings containing only vowels:", count)