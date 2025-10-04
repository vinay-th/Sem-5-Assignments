# 2. Create a package school with two sub-packages:
# students → containing student_info.py (function student_details(name, age))
# teachers → containing teacher_info.py (function teacher_details(name, subject))
# Test it by printing both student and teacher details.

from school.students.student_info import student_details
from school.teachers.teacher_info import teacher_details

student_details("Alice", 14)
teacher_details("Mr. Smith", "Mathematics")
