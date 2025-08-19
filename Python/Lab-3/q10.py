# 10.Write a function using **varargs to print employee details like name, department, and salary.

def print_employee_details(**kwargs):
    for key, value in kwargs.items():
        print(f"{key}: {value}")

print_employee_details(name="Mahesh", department="HR", salary=50000)
