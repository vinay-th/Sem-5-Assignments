# 1 Write a Python program to accept marks for 5 subjects, calculate average, and assign grade (A/B/C/D/Fail). If any subject has marks <35, display “Fail due to subject back”.

total = 0

for i in range(1,6):
    marks = int(input(f"Enter marks for subject {i}: "))
    if marks < 35:
        print("Fail due to subject back")
        break
    total += marks

average = total / 5
if average >= 60:
    grade = "A"
elif average >= 50:
    grade = "B"
elif average >= 40:
    grade = "C"
elif average >= 35:
    grade = "D"
else:
    grade = "Fail"
print(f"Average marks: {average}, Grade: {grade}")