# 6. Write a program to demonstrate the use of finally with exception.

try:
    num = int(input("Enter a POSITIVE number: "))

    if num < 0:
        raise ValueError("Kya be lawde padhna nai ata")
    else:
        print(f"You entered {num}")
except ValueError as e:
    print(e)
finally:
    print("All done.")