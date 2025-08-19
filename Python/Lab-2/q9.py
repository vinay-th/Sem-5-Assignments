# 9 Build a student record system using a dictionary. Include add, update,
# delete, and sort by marks using `lambda`.

students = {}

add_student = lambda name, marks: students.update({name: marks})
update_student = lambda name,marks: students.update({name: marks})
delete_student = lambda name: students.pop(name)
# Here in sorted so when we will make a list of name & marks with items()
# We now use value as our key in sorting i.e on 2nd element of list so x[1]
# "Vinay", 50, "Niomi", 90, "Ashish", 70
# all marks are on 2nd so x: x[1]
sort_by_marks  = lambda: dict(sorted(students.items(), key=lambda x: x[1]))

add_student("Vinay", 50)
add_student("Niomi", 90)
add_student("Ashish", 70)
add_student("Dev", 50)

update_student("Vinay", 90)
delete_student("Dev")

print(students)
print("Sorted by marks:", sort_by_marks())
