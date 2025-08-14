# Create a set of vowels found in a user-given sentence. Then convert the set
# to a frozenset and try to remove an element (handle the exception).

sentance = input("Enter a sentence: ")
vowels = set()

for char in sentance.lower():
    if char in 'aeiou':
        vowels.add(char)
    else:
        pass  # Ignore non-vowel characters

# a frozen set is an immutable version of a set
# you can't add remove clear update in frozenset
frozen_vowels = frozenset(vowels)
print("Frozenset of vowels:", frozen_vowels)

try:
    # Attempting to remove an element from a frozenset
    frozen_vowels.remove('a')
except AttributeError as e:
    print("Error:", e)