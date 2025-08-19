# 5. Write a function that takes a string as input and returns the number of vowels in it.
def count_vowels(str1):
    vowels = "aeiouAEIOU"
    count = 0
    for char in str1:
        if char in vowels:
            count += 1
    return count

# Test cases
print(count_vowels("Hello World"))  # Output: 3
print(count_vowels("Python"))       # Output: 1
print(count_vowels("AEIOU"))        # Output: 5