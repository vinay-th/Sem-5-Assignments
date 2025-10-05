# 6. Implement an e-commerce hierarchy: User → Customer →
# PremiumCustomer. Add discounts and loyalty points calculations at each
# level.
class User:
    def __init__(self, username, email):
        self.username = username
        self.email = email
        self.role = "User"
        self.loyalty_points = 0
        self.discount = 0
    
    def get_info(self):
        return f"Username: {self.username}, Email: {self.email}, Role: {self.role}, Loyalty Points: {self.loyalty_points}, Discount: {self.discount}%"
    
class Customer(User):
    def __init__(self, username, email):
        super().__init__(username, email)
        self.role = "Customer"
        self.loyalty_points = 10
        self.discount = 5
    
    def calculate_discount(self, amount):
        return amount * (self.discount / 100)
    
class PremiumCustomer(Customer):
    def __init__(self, username, email):
        super().__init__(username, email)
        self.role = "PremiumCustomer"
        self.loyalty_points = 50
        self.discount = 15
    
    def calculate_discount(self, amount):
        return amount * (self.discount / 100)
    
user = User("Mahesh", "mahesh@xyz.in")
customer = Customer("Ramesh", "ramesh@xyz.in")
premium_customer = PremiumCustomer("Suresh", "suresh@xyz.in")

print(user.get_info())
print(customer.get_info())
print(premium_customer.get_info())

amount = 1000
print(f"Customer Discount on {amount}: {customer.calculate_discount(amount)}")
print(f"Premium Customer Discount on {amount}: {premium_customer.calculate_discount(amount)}")
