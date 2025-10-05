# 7. Write a program to create a function employee () using the following conditions.
# a. It should accept the employee’s name and salary and display both.
# b. If the salary is missing in the function call, then assign default value 10000 to salary

def employee(name, sal = 10000):
    print(f"Employee name is : {name}")
    print(f"Employee salary is : {sal}")

employee("Vinay", 50000)
employee("Mangesh")