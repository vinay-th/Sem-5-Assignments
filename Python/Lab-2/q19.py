# 19 Accept a number and check whether it is a palindrome using logic (no
# string conversion allowed).

num = int(input("Enter a number to check if palindrome: "))
temp = num
res = 0
rem = 0

while temp != 0:
    rem = temp % 10
    res = res * 10 + rem
    temp //= 10

if num == res:
    print("Palindrome")
else:
    print("Not Palindrome")