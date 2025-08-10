# 5. Write a Python program which will have Main Menu for selecting Elective Subjects as follows:
# Main Menu:
# 1. Joomla
# 2. Ruby onRails
# 3. Drupal
# 4. Android
# 5. iOS
# Display proper message for every choice. Use elif to create a menu:
print("Main Menu: ")
print("1. Joomla")
print("2. Ruby on Rails")
print("3. Drupal")
print("4. Android")
print("5. iOS")

choice = input("Please select an elective subject (1-5): ")

if choice == "1":
    print("You have selected Joomla.")
elif choice == "2":
    print("You have selected Ruby on Rails.")
elif choice == "3":
    print("You have selected Drupal.")
elif choice == "4":
    print("You have selected Android.")
elif choice == "5":
    print("You have selected iOS.")
else:
    print("Invalid choice. Please select a valid elective subject.")