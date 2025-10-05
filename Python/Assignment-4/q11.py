# 11. Create a StudentResult class that calculates grade percentages. Handle
# exceptions if marks entered exceed subject maximums or are negative.
class StudentResult:
    def __init__(self, marks):
        self.marks = marks
    
    def get_grade(self):
        if self.marks > 85:
            return 'A'
        elif 60 < self.marks < 85:
            return 'B'
        elif 30 < self.marks < 60:
            return 'C'
        else:
            return 'D'
    
StudentResults = []
num_students = int(input("Enter number of students: "))
for _ in range(num_students):
    try:
        marks = float(input("Enter marks obtained: "))
        if marks < 0:
            raise ValueError("Marks cannot be negative.")
        if marks > 100:
            raise ValueError("Marks cannot exceed 100.")
        student = StudentResult(marks)
        StudentResults.append(student)
    except ValueError as ve:
        print(ve)
    except Exception as e:
        print("An unexpected error occurred:", e)
        continue
    else:
        print(f"Grade: {student.get_grade()}")