# Write a program that simulates a basic bank transaction system using
# dictionary: account numbers as keys and balance as values. Allow user to
# deposit, withdraw, and check balance.

bank_accounts = {}

def create_account(account_number, initial_balance=0):
    bank_accounts[account_number] = initial_balance

def deposit(account_number, amount):
    if account_number in bank_accounts:
        bank_accounts[account_number] += amount
    else:
        print("Account not found.")

def withdraw(account_number, amount):
    if account_number in bank_accounts:
        if bank_accounts[account_number] >= amount:
            bank_accounts[account_number] -= amount
        else:
            print("Insufficient funds.")
    else:
        print("Account not found.")

def check_balance(account_number):
    if account_number in bank_accounts:
        return bank_accounts[account_number]
    else:
        print("Account not found.")
        return None


print("Welcome to the Bank Transaction System")
print("1. Create Account")
print("2. Deposit")
print("3. Withdraw")
print("4. Check Balance")
print("5. Exit")

while True:
    choice = input("\nEnter your choice (1-5): ")

    if choice == "1":
        acc_num = input("Enter account number: ")
        initial_balance = float(input("Enter initial balance: "))
        create_account(acc_num, initial_balance)
        print("Account created successfully.")

    elif choice == "2":
        acc_num = input("Enter account number: ")
        amount = float(input("Enter amount to deposit: "))
        deposit(acc_num, amount)
        print("Deposit successful.")

    elif choice == "3":
        acc_num = input("Enter account number: ")
        amount = float(input("Enter amount to withdraw: "))
        withdraw(acc_num, amount)
        print("Withdrawal successful.")

    elif choice == "4":
        acc_num = input("Enter account number: ")
        balance = check_balance(acc_num)
        if balance is not None:
            print("Current balance:", balance)

    elif choice == "5":
        print("Thank you for using the Bank Transaction System.")
        break

    else:
        print("Invalid choice. Please try again.")