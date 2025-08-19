# 14 Accept a tuple of integers. Print elements whose square is > 50 using list
# comprehension.

numbers = ()

while(True):
    num = int(input("Enter number in tuple(to end enter 0): "))
    if(num == 0):
        break
    numbers += (int(num),)

result = [x for x in numbers if x ** 2 > 50]

print(result)