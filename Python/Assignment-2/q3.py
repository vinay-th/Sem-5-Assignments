# Write a program to input a list of 10 names and check if there are any
# duplicate entries. If yes, display the duplicates.
list = []

for i in range(10):
    name = input(f"Enter name {i+1}: ") # using f -> formatted string literal
    list.append(name)

duplicates = set() # collection of unique elements

for i in range(len(list)):
    if list[i] in duplicates: # if any duplicates found
        print(f"Duplicate entry found: {list[i]}")  # found duplicate print it
    else:
        duplicates.add(list[i]) # no duplicate found add it in duplicates set