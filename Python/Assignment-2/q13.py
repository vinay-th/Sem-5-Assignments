# Continuously accept integers until a negative number is entered. Calculate
# sum, average, and count of positive numbers entered.

sum = 0
avg = 0
count = 0

while True:
    num = int(input("Enter a positive integer (negative to stop): "))
    if num < 0:
        break
    sum += num
    count += 1
    avg = sum / count if count > 0 else 0

print("Sum:", sum)
print("Average:", avg)
print("Count:", count)