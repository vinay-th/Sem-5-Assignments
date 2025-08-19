# 18 Write a login system using a dictionary. Allow up to 3 login attempts and
# show success or failure with proper message.

users = {
    "admin" : "admin",
    "vinay" : "cheel",
    "daddy" : "ego"
}

attempts = 3

while attempts > 0:
    username = input("Please enter your username: ")
    password = input("Please enter your password: ")

    if username in users and users[username] == password:
        print("Welcome to the Server")
        break
    else:
        print("Incorrect username or password try again")
        attempts -= 1
        print("Attempts left: ", attempts)