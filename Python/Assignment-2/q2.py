# Accept an integer input and display a right-angled number triangle pattern
# using nested loops. Example for input 4:
# 1
# 2 3
# 4 5 6
# 7 8 9 10

n = int(input("Enter the rows: "))
count = 1

for i in range(0, n):
    for j in range(0, i + 1):
        print(count, end = " ")
        count += 1 # Here count++ won't work
    print()  # Move to the next line after each row