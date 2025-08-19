# 5 Create a dictionary with employee names and salaries. Increase salary by
# 10% if it's <50,000. Remove employees whose updated salary exceeds
# 1,00,000.

employees = {
    "Mahesh" : 70000,
    "Suresh": 60000,
    "Ramesh" : 50000,
    "Mukesh" : 80000,
    "Rakesh" : 101000,
    "Khagesh" : 40000
}

employees = {name: salary for name, salary in employees.items() if salary < 100000}

for name, salary in employees.items():
    if salary < 50000:
        employees[name] = salary * 1.1

print(employees)