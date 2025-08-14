# Write a program to manage a contact book using dictionary. Allow user to
# add, update, delete, and search contacts using menu-driven approach.
contacts = {}

print("------Contact Book Menu------")

def print_contacts():
    if contacts == {}:
        print("No contacts found.")
    else:
        for name, phone in contacts.items():
            print(f"Name: {name}, Phone: {phone}")

def add_contact():
    name = input("Enter the name of the contact: ")
    phone = input("Enter the phone number of the contact: ")
    contacts[name] = phone
    print("Contact added successfully.")

def update_contact():
    name = input("Enter the name of the contact to update: ")
    if name in contacts:
        phone = input("Enter the new phone number: ")
        contacts[name] = phone
        print("Contact updated successfully.")
    else:
        print("Contact not found.")

def delete_contact():
    name = input("Enter the name of the contact to delete: ")
    if name in contacts:
        del contacts[name]
        print("Contact deleted successfully.")
    else:
        print("Contact not found.")

def search_contact():
    name = input("Enter the name of the contact to search: ")
    if name in contacts:
        print(f"Name: {name}, Phone: {contacts[name]}")
    else:
        print("Contact not found.")

while True:
    print("1. Print the contact book.")
    print("2. Add a new contact.")
    print("3. Update an existing contact.")
    print("4. Delete a contact.")
    print("5. Search for a contact.")
    print("q. Quit the program.")
    choice = input("Enter your choice (1-5) or 'q' to quit: ")
    if choice == '1':
        print("\n\n")
        print_contacts()
        print("\n\n")
    elif choice == '2':
        print("\n\n")
        add_contact()
        print("\n\n")
    elif choice == '3':
        print("\n\n")
        update_contact()
        print("\n\n")
    elif choice == '4':
        print("\n\n")
        delete_contact()
        print("\n\n")
    elif choice == '5':
        print("\n\n")
        search_contact()
        print("\n\n")
    elif choice == 'q':
        print("Exiting the contact book.")
        break
    else:
        print("Invalid choice. Please try again.")