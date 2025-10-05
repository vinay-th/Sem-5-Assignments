# 1. Write a python program to create a Tkinter as below:
# • Name – To take a student name
# • Hobbies – create a check box
# • Listbox - add a option FY, SY and TY
# • Radio button – Male/Female
# Add a submit button to add the details on a label. If Hobbies is not selected then raise an
# exception.
import tkinter as tk
from tkinter import messagebox

def submit():
    name = entry1.get()
    selected_hobbies = []

    if singing.get():
        selected_hobbies.append("Singing")
    if football.get():
        selected_hobbies.append("Football")
    if reading.get():
        selected_hobbies.append("Reading")

    if not selected_hobbies:
        messagebox.showerror("Error", "Please select at least one hobby!")
        return
    
    year = listbox.get(tk.ACTIVE)
    gender = gender_var.get()

    info = f"Name: {name}\nHobbies: {', '.join(selected_hobbies)}\nYear: {year}\nGender: {gender}"

    result_label.config(text=info)

root = tk.Tk()
root.title("Student Info")
root.geometry("400x300")

label1 = tk.Label(root, text="Enter name: ")
label2 = tk.Label(root, text="Choose hobby: ")
label3 = tk.Label(root, text="Choose year: ")
label4 = tk.Label(root, text="Choose gender: ")

label1.grid(row=0, column=0, padx=5, pady=5)
label2.grid(row=1, column=0, padx=5, pady=5)
label3.grid(row=2, column=0, padx=5, pady=5)
label4.grid(row=3, column=0, padx=5, pady=5)

entry1 = tk.Entry(root)
entry1.grid(row=0, column=1, columnspan=2, padx=5, pady=5)

singing = tk.BooleanVar()
football = tk.BooleanVar()
reading = tk.BooleanVar()

cb1 = tk.Checkbutton(root, variable=singing, text="Singing")
cb2 = tk.Checkbutton(root, variable=football, text="Football")
cb3 = tk.Checkbutton(root, variable=reading, text="Reading")

cb1.grid(row=1, column=1, sticky="w")
cb2.grid(row=1, column=2, sticky="w")
cb3.grid(row=1, column=3, sticky="w")

listbox = tk.Listbox(root, height=3)

for year in ["FY", "SY", "TY"]:
    listbox.insert(tk.END, year)

listbox.grid(row=2, column=1, sticky="w")

gender_var = tk.StringVar(value="Male")
rb1 = tk.Radiobutton(root, text="Male", variable=gender_var, value="Male")
rb2 = tk.Radiobutton(root, text="Female", variable=gender_var, value="Female")

rb1.grid(row=3, column=1, sticky="w")
rb2.grid(row=3, column=2, sticky="w")

tk.Button(root, text="Submit", command=submit, bg="lightblue").grid(row=4, column=1, pady=10)

result_label = tk.Label(root, text="", fg="green", justify="left")
result_label.grid(row=5, column=0, columnspan=4, pady=10)

root.mainloop()