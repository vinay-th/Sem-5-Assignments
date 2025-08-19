# 2 Print the following hollow triangle pattern using nested `for` loops:
#      *
#    *   *
#   *     * 
#  *       *
# * * * * * *

rows = int(input("Enter the row: "))

for i in range(1, rows + 1):
    # Print leading spaces
    for j in range(rows - i):
        print(" ", end="")

    # Print stars and spaces
    for k in range(1, 2 * i):
        if k == 1 or k == 2 * i - 1 or i == rows:
            print("*", end="")
        else:
            print(" ", end="")

    # Move to next line
    print()