# 3. Write a Python program that counts how many times a value appears in a tuple.

tuple_values = (1, 2, 3, 4, 5, 1, 2, 1)

value_to_count = int(input("Enter a value to count in the tuple: "))
count = 0

for item in tuple_values:
    if item == value_to_count:
        count += 1

print(f"Value {value_to_count} appears {count} times in the tuple.")