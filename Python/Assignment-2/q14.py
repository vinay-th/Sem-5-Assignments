# Write a program to find common elements between two tuples without
# converting them to lists or sets.

tuple1 = (1, 2, 3, 4, 5)
tuple2 = (3, 4, 5, 6, 7)

for element in tuple1:
    if element in tuple2:
        print("Common element found:", element)
