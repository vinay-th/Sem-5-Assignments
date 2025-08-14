# Input a paragraph and count the number of words, vowels, and consonants.
# Store word frequencies in a dictionary.

para = input("Enter a paragraph: ")

words = para.split()
word_count = len(words)

vowels = 0
consonants = 0
word_frequencies = {} # Dictionary to store word frequencies

for word in words:
    if word in word_frequencies:
        word_frequencies[word] += 1
    else:
        word_frequencies[word] = 1
    if word.lower() in 'aeiou':
        vowels += 1
    else:
        consonants += 1

    # Print the results
print("Word count:", word_count)
print("Vowel count:", vowels)
print("Consonant count:", consonants)
print("Word frequencies:", word_frequencies)
