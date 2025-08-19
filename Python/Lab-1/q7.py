# 7. Given a list of integers, write a Python program to remove all duplicates without using set(), and preserve the original order.

def remove_duplicates(lst):
    unique_list = []
    for item in lst:
        if item not in unique_list:
            unique_list.append(item)
    return unique_list

list_of_integers = [1, 2, 2, 3, 4, 4, 5]

new_list = remove_duplicates(list_of_integers)

print(new_list)