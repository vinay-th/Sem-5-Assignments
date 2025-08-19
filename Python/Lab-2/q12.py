# 12 Accept a string and create a dictionary where each key is a character and
# value is its frequency. Ignore spaces and make it case-insensitive.

text = input("Enter some text: ")

text = text.lower().replace(" ", "")

freq = {}

for ch in text:
    freq[ch] = freq.get(ch, 0) + 1

print("Character frequency: ", freq)