# 7. Design a SmartDevice class that inherits from both Phone and Camera.
# Handle method name clashes using method resolution order.

class Phone:
    def __init__(self, brand):
        self.brand = brand
    
    def operate(self):
        print(f"Phone is operating ...")

class Camera:
    def __init__(self, brand):
        self.brand = brand
    
    def operate(self):
        print(f"Camera is operating ...")

class SmartDevice(Phone, Camera):
    def __init__(self, brand):
        Phone.__init__(self, brand)
        Camera.__init__(self, brand)
    
    def operate(self):
        print(f"{self.brand} SmartDevice is operating in dual mode:")
        Phone.operate(self)
        Camera.operate(self)

device = SmartDevice("Lenovo")

device.operate()