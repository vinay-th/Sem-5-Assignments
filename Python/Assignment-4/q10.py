# 10. Create a program to read product details from a CSV file. Handle file not found,
# incorrect CSV format, and empty file errors with different exception blocks.
import csv
import os

filename = "products.csv"

try:
    if os.path.exists(filename) and os.path.getsize(filename) == 0:
        print("CSV file empty")

    with open(filename, "r") as file:
        reader = csv.reader(file)
        headers = next(reader, None)

        if headers != ["ProductID","Name","Price","Quantity"]:
            print("Invalid format")
        else:
            print("Products List:")
            for row in reader:
                if len(row) != 4:
                    raise csv.Error("Incorrect csv data")
                product_id, name, price, quantity = row
                print(f"ID: {product_id}, Name: {name}, Price: ₹{price}, Quantity: {quantity}")
            
except FileNotFoundError:
    print(f"{filename} : Such file not found in directory")
except EOFError as e:
    print(e)
except csv.Error as e:
    print(e)
