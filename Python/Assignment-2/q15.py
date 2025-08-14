# Write a Python program that accepts 5 strings and displays the longest and
# shortest strings.

strings = []
for i in range(5):
    s = input("Enter string {}: ".format(i + 1))
    strings.append(s)

longest = max(strings, key=len) # max function to find longest string
shortest = min(strings, key=len) # min function to find shortest string

print("Longest string:", longest)
print("Shortest string:", shortest)
