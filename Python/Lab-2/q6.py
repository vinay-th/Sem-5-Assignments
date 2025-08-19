# 6 Take 10 numbers from the user. Use `continue` to skip numbers divisible
# by both 3 and 5. Use `break` if number is negative. If loop completes, use
# `else` to print “Input complete”.

numbers = []

for i in range(10):
    number = int(input("Enter a number: "))

    if(number < 0):
        print("Negative number entered")
        break;
    if(number % 3 == 0 and number % 5 == 0):
        print("Skipping")
        continue;

    numbers.append(number)
else:
    print("Input complete")


print(numbers)