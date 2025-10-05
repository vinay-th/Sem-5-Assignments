# 3. Build a Restaurant ordering system. Create classes for MenuItem and
# Order. Allow adding menu items and computing the total bill with tax. Access
# attributes via methods only (no direct attribute printing).

class MenuItem:
    def __init__(self, name, price):
        self.__name = name
        self.__price = price

    def get_name(self):
        return self.__name
    
    def get_price(self):
        return self.__price
    
class Order:
    TAX_RATE = 0.05

    def __init__(self):
        self.__items = []

    def add_item(self, menu_item):
        self.__items.append(menu_item)
    
    def calculate_total(self):
        subtotal = sum(item.get_price() for item in self.__items)
        tax = subtotal * self.TAX_RATE
        total = subtotal + tax
        return subtotal, tax, total
    
    def display_bill(self):
        print("\nOrder Summary:")
        for item in self.__items:
            print(f" - {item.get_name()} : ₹{item.get_price():.2f}")

        subtotal, tax, total = self.calculate_total()
        print(f"\nSubtotal: ₹{subtotal:.2f}")
        print(f"Tax (5%): ₹{tax:.2f}")
        print(f"Total Bill: ₹{total:.2f}")

menu = [
    MenuItem("Pizza", 449),
    MenuItem("Burger", 199),
    MenuItem("Pasta", 349),
    MenuItem("Mocktail", 199)
]

order = Order()

print("Welcome to jhaathu cafe")
for i,item in enumerate(menu, start=1):
    print(f"{i}. {item.get_name()} - ₹{item.get_price():.2f}")

while True:
    choice = input("\nEnter item number to add to order (or 'q' to finish): ")
    if choice.lower() == 'q':
        break
    
    try:
        index = int(choice) - 1

        if 0 <= index < len(menu):
            order.add_item(menu[index])
            print(f"{menu[index].get_name()} added to your order.")
        else:
            print("Invalid choice! Try again")
    except ValueError:
        print("Please enter a valid number or 'q'.")

order.display_bill()