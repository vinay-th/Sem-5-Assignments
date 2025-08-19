# 3 Accept 10 integers. Remove duplicates, sort in descending order, print the
# second highest and second lowest unique value, and average of top 5
# values.

myList = []

for i in range(10):
    myList.append(int(input(f"Enter number at [{i}]: ")))

# Using set for removing dupes
unique_myList = set(myList)
print(f"Duplicates removed list: {unique_myList}")

# Using reverse for descending
sorted_myList = sorted(myList, reverse = True)
print(f"Sorted list(Descending): {sorted_myList}")

# To get second lowest unique value
unique_sorted = sorted(unique_myList)
second_lowest = unique_sorted[1]
print(f"Second lowest unique value is: {second_lowest}")

total = 0
for i in range(5):
    total += myList[i]

avg = total / 5

print(f"The average of first 5: {avg}")