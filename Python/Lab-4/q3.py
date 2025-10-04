# 3. Suppose you are building a package named finance with a sub-package tax containing:
# income_tax.py → function calculate_tax(income) (10% tax if income > 50000 else 5%).
# gst.py → function calculate_gst(amount) (18% GST).
# Write a program to import both modules and compute the final payable amount for a product
# and also calculate income tax for a given salary.

from finance.income.income_tax import calculate_tax
from finance.gst.gst import calculate_gst

income = float(input("Enter your income: "))
it = calculate_tax(income) * income
gst = calculate_gst(income) * income

print("==== Details ====")
print(f"Income Tax: {it}")
print(f"GST: {gst}")
print(f"Total Payable tax: {it + gst}")