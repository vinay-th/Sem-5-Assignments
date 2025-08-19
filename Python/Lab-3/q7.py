# 7. Write a function to greet a person by name, with a default greeting message if no name is given.

def greet(name="Guest"):
    print(f"Hello, {name}!")

name = input("Enter your name: ")
greet(name)

print("Without passing name")  
greet()