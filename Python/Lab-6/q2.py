# 2. Develop a program to simulate a college admission system using classes Student, Course, and
# Admission. Allow students to apply for courses, validate their eligibility, and handle exceptions
# for invalid course selections or missing prerequisites.

class PrerequisiteError(Exception):
    pass

class CourseNotFoundError(Exception):
    pass

class Student:
    def __init__(self, name, category, course, age, cgpa):
        self.name = name
        self.category = category
        self.course = course
        self.age = age
        self.cgpa = cgpa
    
class Course:
    def __init__(self, name, min_cgpa, prerequisite=None):
        self.name = name
        self.min_cgpa = min_cgpa
        self.prerequisite = prerequisite

class Admission:
    def __init__(self, student, course_name):
        self.courses = {
            "BCA": Course("BCA", 5.0),
            "MCA": Course("MCA", 6.0, prerequisite="BCA"),
            "MBA": Course("MBA", 5.5),
            "BSc IT": Course("BSc IT", 5.0),
            "B.Tech": Course("B.Tech", 7.0),
            "M.Tech": Course("M.Tech", 7.5, prerequisite="B.Tech")
        }

        self.student = student
        self.course_name = course_name

        if self.course_name not in self.courses:
            raise CourseNotFoundError(f"Course {self.course_name} does not exist.")

    def check_eligibly(self):
        course = self.courses[self.course_name]

        if self.student.cgpa < course.min_cgpa:
            return False
        
        if course.prerequisite != None:
            if self.student.course != course.prerequisite:
                raise PrerequisiteError(f"Prerequisite {course.prerequisite} not met for {self.course}.")
        return True
        
    def validate_admission(self):
        try:
            self.check_eligibly()
            print(f"Student {self.student.name} is eligible for the course {self.courses[self.course_name].name}.")
        except Exception as e:
            print(f"Admission Error: {e}")

stu1 = Student("Alakh", "General", "B.Tech", 18, 8.5)
admission1 = Admission(stu1, "M.Tech")
admission1.validate_admission()

stu2 = Student("Ravi", "OBC", "BCA", 20, 6.5)
admission2 = Admission(stu2, "MCA")
admission2.validate_admission()

stu3 = Student("Karan", "SC", "BSc IT", 19, 4.5)
admission3 = Admission(stu3, "MBA")
admission3.validate_admission()