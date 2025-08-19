# 22 Write a program that reads a list of words and returns a dictionary where
# keys are word lengths and values are lists of words of that length.

words = input("Enter words: ").split()

word_dict = {}
for word in words:
    length = len(word)
    if length not in word_dict:
        word_dict[length] = []
    word_dict[length].append(word)

print("Word Lengths Dictionary:")
for length, word_list in word_dict.items():
    print(f"{length}: {word_list}")
