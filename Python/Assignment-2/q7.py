# Create a program to input two lists and convert them into a dictionary
# using one as keys and one as values. Swap key-value pairs and display the
# reversed dictionary.
subjects = ["Math", "Physics", "Chemistry", "English"]
marks = [88, 91, 66, 87]

# using zip() to create a dictionary
result_dict = dict(zip(subjects, marks))

# Swapping the key value pairs 
swapped_result = {a: b for b, a in result_dict.items()}
# using a as key and b as values in result_dict.items()
# then using them as b, a so that key gets into val and val into keys

print("Original Dictionary:")
print(result_dict)

print("\nSwapped Dictionary:")
print(swapped_result)