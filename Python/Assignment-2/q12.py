# 12 Input a paragraph and count the number of words, vowels, and consonants.
# Store word frequencies in a dictionary.
para = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."

words = para.split()
word_count = len(words)

vowels = 0
consonants = 0
word_frequencies = {}

for word in words:
    if word in word_frequencies:
        word_frequencies[word] += 1
    else:
        word_frequencies[word] = 1
    for ch in word.lower():
        if ch in 'aeiou':
            vowels += 1
        else:
            consonants += 1


print("Word count:", word_count)
print("Vowel count:", vowels)
print("Consonant count:", consonants)
print("Word frequencies:", word_frequencies)
