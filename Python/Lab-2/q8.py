# 8 Given a list of numbers, use `enumerate()` to print index and value. Use `all()` to check if all elements are positive, and `any()` to check if any is a multiple of 7.

numbers = [3, 14, -2, 21, 5, 8]

print("Index and Values: ")
for idx, val in enumerate(numbers):
    print(f"Index {idx} → Value {val}")

all_positive = all(num > 0 for num in numbers)
print("\nAll elements are positive?", all_positive)

any_multiple_7 = any(num % 7 == 0 for num in numbers)
print("Any element is multiple of 7?", any_multiple_7)
