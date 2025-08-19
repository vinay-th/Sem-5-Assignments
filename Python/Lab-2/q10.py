# 10 Demonstrate list operations: `append()`, `extend()`, `insert()`, `remove()`, `pop()`, `reverse()`, `sort()` in descending order

myList = [1,2,4,2,4,6,7,3,8,9]

print("Current list: ", myList)

myList.append(10)
print("List after appending 10: ", myList)

myList.extend([1,2,3,4])
print("List after extending to [1,2,3,4]: ", myList)

myList.insert(5, 0)
print("List after inserting 0 on 5th idx: ", myList)

myList.remove(2)
print("List after removing 2(only one): ", myList)

myList.pop(5)
print("List after popping on 5th idx: ", myList)

myList.reverse()
print("Reversed list: ", myList)

myList.sort(reverse=True)
print("Descending Sorted list: ", myList)