# 16. Develop a Ride Sharing Application with classes Driver, Passenger, Ride,
# and Payment. Include dynamic ride fare calculation based on distance and surge
# pricing, custom exceptions for invalid payment method or ride cancellation, and
# file handling to log completed rides using with.

class InvalidPaymentMethodError(Exception):
    pass

class RideCancellationError(Exception):
    pass

class Driver:
    def __init__(self, name, vehicle):
        self.name = name
        self.vehicle = vehicle
        self.is_available = True

    def __str__(self):
        return f"Driver: {self.name}, Vehicle: {self.vehicle}"

class Passenger:
    def __init__(self, name):
        self.name = name

    def __str__(self):
        return f"Passenger: {self.name}"

class Ride:
    def __init__(self, pass_name, driver_name, distance, surge):
        self.passenger = pass_name
        self.driver = driver_name
        self.distance = distance
        self.surge = surge
        self.fare = self.calculate_fare()

    def calculate_fare(self):
        base_fare = 5.0
        cost_per_km = 20.0
        surge_multiplier = 1.5 if self.surge else 1.0
        return base_fare + (cost_per_km * self.distance * surge_multiplier)

    def __str__(self):
        return (f"Ride Details:\nPassenger: {self.passenger.name}\nDriver: {self.driver.name}\n"
                f"Distance: {self.distance} km\nSurge Pricing: {'Yes' if self.surge else 'No'}\n"
                f"Total Fare: ${self.fare:.2f}")
    
    def log_ride(self):
        try:
            with open("ride_log.txt", "a") as log_file:
                log_file.write(str(self) + "\n\n")
        except Exception as e:
            print(f"Error logging ride: {e}")
    
    def book_ride(self):
        if not self.driver.is_available:
            raise RideCancellationError("Ride cannot be booked, driver is not available.")
        self.driver.is_available = False
        print(f"Ride booked successfully for {self.passenger.name} with {self.driver.name}.")
        self.log_ride()
    
class Payment:
    def __init__(self, method):
        self.method = method

    def process_payment(self, amount):
        valid_methods = ['credit_card', 'debit_card', 'paypal', 'cash']
        if self.method not in valid_methods:
            raise InvalidPaymentMethodError(f"Invalid payment method: {self.method}")
        print(f"Processing payment of ₹{amount:.2f} via {self.method}")
        return True
    

# Example usage
driver = Driver("Alice", "Toyota Prius")
passenger = Passenger("Bob")

ride = Ride(passenger, driver, distance=10, surge=True)
try:
    ride.book_ride()
    payment = Payment("credit_card")
    payment.process_payment(ride.fare)
except (InvalidPaymentMethodError, RideCancellationError) as e:
    print(e)