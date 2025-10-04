# 2. gst.py
# • Create a class GSTCalculator with a method calculate_gst(amount, category) where:
# • GST is 5% for "essential" items
# • GST is 18% for "luxury" items
# • Use exception handling to raise and catch a ValueError if the category is not "essential" or
# "luxury".
# Write a main program to:
# 1. Ask the user for their income and compute income tax using IncomeTaxCalculator.
# 2. Ask for a product amount and category, and compute GST using GSTCalculator.
# 3. Display:
# • Income tax payable
# • GST amount
# • Final product price after GST
# 4. Handle any exceptions (like negative income or invalid category) gracefully

from income_tax import IncomeTaxCalculator

class GSTCalculator:
    def calculate_gst(self, amount, category):
        gst = 0
        if category.lower() == "essential":
            gst = 0.05
        elif category.lower() == "luxury":
            gst = 0.18
        else:
            raise ValueError("Invalid category! Please choose 'essential' or 'luxury'.")
        
        gst_amount = amount * gst
        return gst_amount

if __name__ == "__main__":
    income_calc = IncomeTaxCalculator()
    gst_calc = GSTCalculator()

    try:
        income = float(input("Enter your annual income: "))
        income_calc = IncomeTaxCalculator()
        tax = income_calc.calculate_tax(income)

        amount = float(input("\nEnter product amount: "))
        category = input("Enter product category (essential/luxury): ")
        gst_calc = GSTCalculator()
        gst_amount = gst_calc.calculate_gst(amount, category)

        final_price = amount + gst_amount
        print("\n===== SUMMARY =====")
        print(f"Income Tax Payable: ₹{tax:.2f}")
        print(f"GST Amount: ₹{gst_amount:.2f}")
        print(f"Final Product Price (after GST): ₹{final_price:.2f}")
    except ValueError as e:
        print(e)
    except Exception as e:
        print(e)