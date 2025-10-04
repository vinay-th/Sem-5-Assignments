# 1. income_tax.py
# • Create a base class TaxCalculator with a method validate_income(self, income) that raises
# an exception if income is negative.
# • Create a class IncomeTaxCalculator that inherits from TaxCalculator.
# • Implement a method calculate_tax(self, income) in IncomeTaxCalculator using the
# following slab:
# • No tax if income ≤ 30000
# • 10% tax if 30001 ≤ income ≤ 80000
# • 20% tax if income > 80000

class TaxCalculator:
    def validate_income(self, income):
        if income < 0:
            raise ValueError("Income can't be negative")

class IncomeTaxCalculator(TaxCalculator):
    def calculate_tax(self, income):
        self.validate_income(income)

        if income <= 30000:
            tax = 0
        elif 3001 <= income <= 80000:
            tax = 0.1
        elif income > 80000:
            tax = 0.2
        
        return tax

if __name__ == "__main__":
    calc = IncomeTaxCalculator()

    try:
        income = float(input("Enter your income: "))
        tax = income * calc.calculate_tax(income)
        print(f"Calculated tax on ₹{income:.2f} is ₹{tax:.2f}")
    except ValueError as e:
        print(e)