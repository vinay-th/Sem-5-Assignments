# 2.  Define a class Teacher with the following specification:
#  Private members:
#  Name : 20 char
#  Subject: 10 char
#  Basic, DA,HRA : float
#  Salary: float
# Calculate () - function computes the salary and returns it.
# Salary is sum of basic, DA and HRA
# Public member: Readdata() function accept the data values and invoke the calculate
# function

class Teacher:
    def __init__(self):
        self.__name = "",
        self.__subject = "",
        self.__basic = 0.0,
        self.__DA = 0.0,
        self.__HRA = 0.0,
        self.__salary = 0.0

    # Private method
    def __calculate(self):
        self.__salary = self.__basic + self.__DA + self.__HRA
        return self.__salary
    
    # Public method
    def readdata(self):
        self.__name = input("Enter your name: ")[:20]
        self.__name = input("Enter your subject: ")[:10]
        self.__basic = float(input("Enter your basic salary: "))
        self.__DA = float(input("Enter your DA: "))
        self.__HRA = float(input("Enter your HRA: "))
        
        salary = self.__calculate()

        print(f"Calculated Salary: {salary}")

teacher = Teacher()
teacher.readdata()
