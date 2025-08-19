# 15 Create two lists: one with keys and one with values. Combine them into a
# dictionary using `zip()` and update one of the values.
name = ["Suresh", "Ramesh", "Mahesh", "Rakesh"]
marks = [67, 78, 94, 53]

students = dict(zip(name, marks))

print(students)
print(type(students))