# Create a dictionary of city names and temperatures. Remove all cities with
# temperature < 15°C or > 40°C, and display the cleaned dictionary.

cities = {
    # Key       # Value
    "Ahmedabad": 35,
    "Mumbai": 28,
    "Delhi": 42,
    "Bangalore": 22,
    "Chennai": 38
}

# IMPORTANT
# How to do it with Normal For loop code
cleaned_cities = {}
for city, temp in cities.items():
    if 15 <= temp <= 40:
        cleaned_cities[city] = temp


# NOT IMPORTANT
# Advance code (Only if you want to optimize, one line code)
# the cities.items() gives you the key-value pairs in tuple format
# We use dictionary comprehension to do such task
# {key_var : value_var for item in iterable if condition}

# cleaned_cities = {city: temp for city, temp in cities.items() if 15 <= temp <= 40}

print("Cleaned Cities Dictionary:")
for city, temp in cleaned_cities.items():
    print(f"{city}: {temp}°C")