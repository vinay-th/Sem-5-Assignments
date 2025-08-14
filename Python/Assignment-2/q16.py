# Create a dictionary of student names and a list of their marks in 3 subjects.
# Calculate and store the average for each student. Display the dictionary
# with names and averages.

students = {
    "X": [85, 90, 78],
    "Y": [70, 88, 92],
    "Z": [95, 80, 85]
}

student_averages = {}
for name, marks in students.items():
    average = sum(marks) / len(marks)
    student_averages[name] = average

print("Student Averages:")
for name, average in student_averages.items():
    print(f"{name}: {average:.2f}") # using .2f as a format specifier for floating-point numbers
