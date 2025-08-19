# 23 Create a nested dictionary that stores student names as keys, and their
# subjects and marks as sub-dictionaries. Add, update and delete subjects or
# marks.

students = {}

def add_student(name):
    students[name] = {}

    subjects = input(f"Enter subjects for {name} (comma separated): ")
    subjects_list = subjects.split(",")
    
    for subject in subjects_list:
        marks = int(input(f"Enter marks for {name} in {subject.strip()}: "))
        students[name][subject.strip()] = marks

def update_marks(name, subject, marks):
    if name in students and subject in students[name]:
        students[name][subject] = marks
    else:
        print("Student or subject not found.")

def delete_subject(name, subject):
    if name in students and subject in students[name]:
        del students[name][subject]
    else:
        print("Student or subject not found.")

def display_students():
    for name, subjects in students.items():
        print(f"Student: {name}")
        for subject, marks in subjects.items():
            print(f"\t{subject}: {marks}")

while True:
    print("Student Records:")
    print("1. Add Student")
    print("2. Update Marks")
    print("3. Delete Subject")
    print("4. Display Students")
    print("5. Exit")

    choice = input("Enter your choice: ")

    if choice == "1":
        name = input("Enter student name: ")
        add_student(name)
    elif choice == "2":
        name = input("Enter student name: ")
        subject = input("Enter subject name: ")
        marks = int(input("Enter new marks: "))
        update_marks(name, subject, marks)
    elif choice == "3":
        name = input("Enter student name: ")
        subject = input("Enter subject name: ")
        delete_subject(name, subject)
    elif choice == "4":
        display_students()
    elif choice == "5":
        break
    else:
        print("Invalid choice. Please try again.")
