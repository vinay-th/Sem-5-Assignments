# 3. Write a Python application that simulates a smart home system. Create classes for different
# devices such as Light, Fan, and Thermostat. Implement inheritance to handle device types and
# raise exceptions for invalid operations (e.g., setting negative temperature).
class Device:
    def __init__(self, name):
        self.name = name
        self.status = "off"
    
    def turn_on(self):
        self.status = "on"
        print(f"{self.name} is turned on.")
    
    def turn_off(self):
        self.status = "off"
        print(f"{self.name} is turned off.")
    
    def get_status(self):
        return f"{self.name} is {self.status}."
    
class Light(Device):
    def __init__(self, name, brightness = 50):
        super().__init__(name)
        self.brightness = brightness

    def brightness_set(self, val):
        try:
            if 0 <= val <= 100:
                self.brightness = val
                print(f"{self.name} brightness set to {self.brightness}.")
            else:
                raise ValueError("Brightness should be between 0 and 100.")
        except ValueError as e:
            print(f"Error: {e}")

class Fan(Device):
    def __init__(self, name, speed = 1):
        super().__init__(name)
        self.speed = speed

    def speed_set(self, val):
        try:
            if 1 <= val <= 5:
                self.speed = val
                print(f"{self.name} speed set to {self.speed}.")
            else:
                raise ValueError("Speed should be between 1 and 5.")
        except ValueError as e:
            print(f"Error: {e}")

class Thermostat(Device):
    def __init__(self, name, temperature = 20):
        super().__init__(name)
        self.temperature = temperature

    def temperature_set(self, val):
        try:
            if val >= 0:
                self.temperature = val
                print(f"{self.name} temperature set to {self.temperature}°C.")
            else:
                raise ValueError("Temperature cannot be negative.")
        except ValueError as e:
            print(f"Error: {e}")

light = Light("Living Room Light")
light.turn_on()
light.brightness_set(75)
print(light.get_status())
print()

fan = Fan("Bedroom Fan")
fan.turn_on()
fan.speed_set(3)
print(fan.get_status())
print()

thermostat = Thermostat("Hallway Thermostat")
thermostat.turn_on()
thermostat.temperature_set(22)
print(thermostat.get_status())
thermostat.temperature_set(-5)  
print()