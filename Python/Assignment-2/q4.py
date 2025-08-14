# Accept a tuple of integers and count how many elements are divisible by 3
# but not by 5. Also, calculate their sum

numbers = ()

while True:
    num = input("Enter an integer (or 'done' to finish): ")
    if num == 'done': # End condition check
        break
    numbers += (int(num),)  # Add the entered number to the tuple

count = 0
total_sum = 0

# Iterate through the numbers tuple
for n in numbers:
    if n % 3 == 0 and n % 5 != 0: # Check if divisible by 3 but not by 5
        count += 1
        total_sum += n

print(f"Count of numbers divisible by 3 but not by 5: {count}")
print(f"Sum of numbers divisible by 3 but not by 5: {total_sum}")