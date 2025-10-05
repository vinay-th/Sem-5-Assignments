# 7. Demonstrate the usage of assert and with keyword.
num = int(input("Enter a POSITIVE number: "))
assert num >= 0, "Number must be non-negative!"

print("Number is valid:", num)

with open("sample.txt", "w") as file:
    file.write(f"You entered {num}\n")

print("Data written to sample.txt")