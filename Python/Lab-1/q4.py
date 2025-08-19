# 4. Write a Python program to create a dictionary with 3 key-value pairs and print each key and its corresponding value.

student_marks = {
    "Ramesh" : 88,
    "Suresh" : 78,
    "Mahesh" : 85
}

# .items() returns a list of keys and values that is inserted in student,marks by foreach loop 
for student, marks in student_marks.items():
    print(f"Student: {student}, Marks: {marks}")