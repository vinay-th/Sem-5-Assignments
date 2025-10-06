# 5. Write a program to raise an exception if number is negative
class NegativeNumError(Exception):
    pass
try:
    num = int(input("Enter a POSITIVE number: "))

    if num < 0:
        raise NegativeNumError("Kya be lawde padhna nai ata")
    else:
        print(f"You entered {num}")
except NegativeNumError as e:
    print(e)