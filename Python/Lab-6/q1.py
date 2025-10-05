# 1. Create a Python program that allows users to maintain a personal expense tracker. Implement
# classes for Expense and ExpenseManager with methods to add, delete, and view expenses.
# Handle exceptions for invalid inputs, and store all expenses in a CSV file.
import csv

class Expense:
    def __init__(self, date, amount, category, description):
        self.date = date
        self.amount = amount
        self.category = category
        self.description = description
    
    def __str__(self):
        return f"{self.date}, {self.amount}, {self.category}, {self.description}"
    
class ExpenseManager:
    def __init__(self, filename='expenses.csv'):
        self.filename = filename
        self.expenses = []
        self.load_expenses()
    
    def load_expenses(self):
        try:
            with open(self.filename, mode='r') as file:
                reader = csv.reader(file)
                for row in reader:
                    if len(row) == 4:
                        date, amount, category, description = row
                        self.expenses.append(Expense(date, float(amount), category, description))
        except FileNotFoundError:
            pass
    
    def save_expenses(self):
        with open(self.filename, mode='a', newline='') as file:
            writer = csv.writer(file)
            for expense in self.expenses:
                writer.writerow([expense.date, expense.amount, expense.category, expense.description])
    
    def add_expense(self, date, amount, category, description):
        try:
            amount = float(amount)
            new_expense = Expense(date, amount, category, description)
            self.expenses.append(new_expense)
            self.save_expenses()
            print("Expense added successfully.")
        except ValueError:
            print("Invalid amount. Please enter a numeric value.")
    
    def delete_expense(self, index):
        if 0 <= index < len(self.expenses):
            del self.expenses[index]
            self.save_expenses()
            print("Expense deleted successfully.")
        else:
            print("Invalid index. Please try again.")
    
    def view_expenses(self):
        if not self.expenses:
            print("No expenses recorded.")
            return
        for i, expense in enumerate(self.expenses):
            print(f"{i}: {expense}")

manager = ExpenseManager()

while True:
    print("\nExpense Tracker Menu:")
    print("1. Add Expense")
    print("2. Delete Expense")
    print("3. View Expenses")
    print("4. Exit")
    
    choice = input("Enter your choice: ")
    
    if choice == '1':
        date = input("Enter date (YYYY-MM-DD): ")
        amount = input("Enter amount: ")
        category = input("Enter category: ")
        description = input("Enter description: ")
        manager.add_expense(date, amount, category, description)
    elif choice == '2':
        index = int(input("Enter the index of the expense to delete: "))
        manager.delete_expense(index)
    elif choice == '3':
        manager.view_expenses()
    elif choice == '4':
        break
    else:
        print("Invalid choice. Please try again.")