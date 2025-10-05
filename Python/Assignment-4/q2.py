# 2. Create a TravelAgency class that manages multiple Trip objects. Each trip
# contains destination, cost, and duration. Accept trips from the user and display the
# most expensive trip
class Trip:
    def __init__(self, dest, cost, duration):
        self.dest = dest
        self.cost = cost
        self.duration = duration
    
    def display(self):
        print(f"Destination: {self.dest}, Cost: ₹{self.cost}, Duration: {self.duration} days")

class TripAgency:
    def __init__(self):
        self.trips = []

    def add_trip(self, trip):
        self.trips.append(trip)
    
    def display_most_exp_trip(self):
        if not self.trips:
            print("No trips available.")
            return
        
        most_exp = max(self.trips, key=lambda t: t.cost)

        print("Most expensive trip is : ")
        most_exp.display()

agency = TripAgency()

n = int(input("Enter number of trips to add: "))

for i in range(n):
    print(f"\nEnter details for Trip {i+1}:")
    destination = input("Destination: ")
    cost = float(input("Cost: ₹"))
    duration = int(input("Duration (in days): "))

    trip = Trip(destination, cost, duration)
    agency.add_trip(trip)

print()

agency.display_most_exp_trip()