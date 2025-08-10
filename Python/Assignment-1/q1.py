# Create a Python program that will have 3 variables which stores integer, float and complex value. Display its value and also demonstrate its datatype class using type().

# Define the variables
int_var = int(input("Enter an integer value: "))
float_var = float(input("Enter a float value: "))
complex_var = complex(input("Enter a complex value (e.g., 1+2j): "))

# Display the values and their types
print("Integer value:", int_var)
print("Float value:", float_var)
print("Complex value:", complex_var)

print("Data type of integer variable:", type(int_var))
print("Data type of float variable:", type(float_var))
print("Data type of complex variable:", type(complex_var))