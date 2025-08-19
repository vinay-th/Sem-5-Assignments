# 20 Accept a tuple of integers. Without converting to list, find the 3rd highest and 2nd lowest values

numbers = ()

while(True):
    num = int(input("Enter number(to stop enter 0): "))
    
    if num == 0:
        break;

    numbers += (int(num),)

# 3rd highest so 3rd from end
print(sorted(numbers)[-3])
# 2nd lowest so 2nd from start
print(sorted(numbers)[1])