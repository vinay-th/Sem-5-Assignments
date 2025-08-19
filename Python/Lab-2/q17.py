# 17 Accept a sentence and create a dictionary where each word is a key and
# value is its length. Print the word(s) with the maximum length.

sent = input("Enter a sentence: ")
words = sent.split()

words_length = {word: len(words) for word in words}

print(words_length)

max_len = max(words_length.values())

max_words = [word for word, length in words_length.items() if length == max_len]

print("Word(s) with maximum length:", max_words)