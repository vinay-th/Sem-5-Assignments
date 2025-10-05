# 8. Create a Vehicle base class with subclasses Car, Bike, and Truck. Each
# should override a method calculate_trip_cost(distance) using their
# own fuel efficiency.
class Vehicle:
    def __init__(self, fuel_efficiency):
        self.fuel_efficiency = fuel_efficiency  
    
    def calculate_trip_cost(self, distance, fuel_price):
        fuel_needed = distance / self.fuel_efficiency
        return fuel_needed * fuel_price
    
class Car(Vehicle):
    def __init__(self, fuel_efficiency):
        super().__init__(fuel_efficiency)

class Bike(Vehicle):
    def __init__(self, fuel_efficiency):
        super().__init__(fuel_efficiency)

class Truck(Vehicle):
    def __init__(self, fuel_efficiency):
        super().__init__(fuel_efficiency)


car = Car(15) 
bike = Bike(40) 
truck = Truck(8) 
distance = 150 
fuel_price = 98

print(f"Car trip cost: ₹{car.calculate_trip_cost(distance, fuel_price):.2f}")
print(f"Bike trip cost: ₹{bike.calculate_trip_cost(distance, fuel_price):.2f}")
print(f"Truck trip cost: ₹{truck.calculate_trip_cost(distance, fuel_price):.2f}")