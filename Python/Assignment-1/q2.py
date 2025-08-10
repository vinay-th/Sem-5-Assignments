# 1. Create a Python program that will have one string variable =“ Welcome to Python”.
# Perform following operations:
# • Print whole string
# • Print only first character of string
# • Print 3rdcharacter to -1 character of string using slicing operator
# • Print string from 4thcharacter to the end of string using slicing operator
# • Print whole string 5 times using appropriate operator.
# • Count the occurance of “to”
# • Print length of string
# • Convert the string to lowecase
# • Find the substring “Python”
# • Remove leading space from string
# • Check whether string is ending with “is” or not
str = "Welcome to Python"

print("Whole string: ", str)
print("First character: ", str[0])
print("Third to second last character: ", str[2:-1]) #2 for 3rd -1 for second last 0123...-2-1-0
print("From 4th character to end: ", str[3:]) #3 for 4th character
print("Whole string 5 times: ", str * 5)
print("Count of 'to': ", str.count('to'))
print("Length of string: ", len(str))
print("String in Lowercase: ", str.lower())
print("Substring 'Python' found at index: ", str.find("Python"))
print("String after removing leading space: ", str.lstrip())
print("String ends with 'is': ", str.endswith("is"))