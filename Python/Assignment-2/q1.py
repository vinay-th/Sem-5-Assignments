# 1 Write a Python program to input a list of student marks, find average, and print 'Pass with Distinction' if average ≥ 85, 'Pass' if ≥ 50, else 'Fail'. Also, count how many subjects are failed (<35).

marks = []
num_subjects = int(input("Enter the number of subjects: "))
for i in range(num_subjects):
    mark = float(input(f"Enter mark for subject {i+1}: "))
    marks.append(mark)

average = sum(marks) / num_subjects

if average >= 85:
    print("Result: Pass with Distinction")
elif average >= 50:
    print("Result: Pass")
else:
    print("Result: Fail")

failed_subjects = sum(1 for mark in marks if mark < 35)
print("Number of failed subjects:", failed_subjects)