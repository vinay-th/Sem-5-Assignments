# 6. Write a python program to perform following operations on string.
# • Reverse string and print it
# • count the occurance
# • Check whether the string endswith particular substring or not
# • find substring

str = input("Enter the string: ")

print(f"Reverse of string is: {str[::-1]}")

substr = input("Enter the substring to check it's occurrence: ")
print(f"Is substring in og string: {substr in str}")

substr = input("Enter the substring to check if og ends with it: ")
print(f"Is substring end of og string: {str.endswith(substr)}")

find_sub = input("\nEnter a substring to find its index: ")
index = str.find(find_sub)
if index != -1:
    print(f"Substring '{find_sub}' found at index {index}")
else:
    print(f"Substring '{find_sub}' not found in the string.")