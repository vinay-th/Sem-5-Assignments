# 9. Simulate an online ticket booking system where user inputs seat numbers. Handle
# errors for invalid seat number range, already booked seats, and invalid data types.
class SeatBooking:
    def __init__(self, total_seats):
        self.total_seats = total_seats
        self.booked_seats = set()

    def book_seat(self, seat_number):
        try:
            seat_number = int(seat_number)
            if seat_number < 1 or seat_number > self.total_seats:
                raise ValueError("Invalid seat number range.")
            if seat_number in self.booked_seats:
                raise ValueError("Seat already booked.")
            self.booked_seats.add(seat_number)
            return f"Seat {seat_number} successfully booked."
        except ValueError as ve:
            return str(ve)
        except Exception:
            return "Invalid data type for seat number."

booking_system = SeatBooking(100)
print(booking_system.book_seat(10))  
print(booking_system.book_seat(10))  
print(booking_system.book_seat(101))  
print(booking_system.book_seat("A"))  