# 21 Create a program that checks whether a given list of brackets (like
# `'([{}])'`) is balanced using stack logic (using list as stack).

expression = input("Enter brackets expression: ")

stack = []
pairs = {')': '(', ']': '[', '}': '{'}
balanced = True

for ch in expression:
    if ch in "([{":   # opening bracket → push
        stack.append(ch)
    elif ch in ")]}":  # closing bracket
        if not stack or stack[-1] != pairs[ch]:
            balanced = False
            break
        stack.pop()

if balanced and not stack:
    print("Balanced")
else:
    print("Not Balanced")
