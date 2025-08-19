# 24 Write a Python program to flatten a nested list (e.g., `[[1, 2], [3, 4], [5]]`) into a single list `[1, 2, 3, 4, 5]` without using built-in `sum()`.

nested_list = [[1, 2], [3, 4], [5]]
flattened_list = []

for sublist in nested_list:
    for item in sublist:
        flattened_list.append(item)

print(flattened_list)