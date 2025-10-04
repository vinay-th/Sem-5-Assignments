# Create a package utilities with a sub-package stringops containing a module which performs any
# 5 string operations.
# Import the function in another program and test it with a sample string
from utilities.stringops.string_operations import *

sample = input("Enter your string: ")

print("Original String:", sample)
print("Length:", str_len(sample))
print("Uppercase:", str_upper(sample))
print("Lowercase:", str_lower(sample))
print("Reversed:", str_rev(sample))
print("Vowel Count:", count_vowels(sample))