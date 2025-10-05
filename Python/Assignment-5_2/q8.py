import tkinter as tk
from tkinter import messagebox

def show_details():
    fname = entry1.get()
    lname = entry2.get()
    desg = entry3.get()
    company = entry4.get()
    country_name = entry5.get()

    messagebox.showinfo("Details", f"First Name: {fname}\nLast Name: {lname}\nDesignation: {desg}\nCompany: {company}\nCountry: {country_name}")

root = tk.Tk()
root.title("Personal details")

lbl1 = tk.Label(root, text="First Name")
lbl2 = tk.Label(root, text="Last Name")
lbl3 = tk.Label(root, text="Designation")
lbl4 = tk.Label(root, text="Company")
lbl5 = tk.Label(root, text="Country")

lbl1.grid(row=0, column=0, padx=5, pady=5, sticky="w")
lbl2.grid(row=1, column=0, padx=5, pady=5, sticky="w")
lbl3.grid(row=2, column=0, padx=5, pady=5, sticky="w")
lbl4.grid(row=3, column=0, padx=5, pady=5, sticky="w")
lbl5.grid(row=4, column=0, padx=5, pady=5, sticky="w")

entry1 = tk.Entry(root)
entry2 = tk.Entry(root)
entry3 = tk.Entry(root)
entry4 = tk.Entry(root)
entry5 = tk.Entry(root)

entry1.grid(row=0, column=1, padx=5, pady=5, sticky="w")
entry2.grid(row=1, column=1, padx=5, pady=5, sticky="w")
entry3.grid(row=2, column=1, padx=5, pady=5, sticky="w")
entry4.grid(row=3, column=1, padx=5, pady=5, sticky="w")
entry5.grid(row=4, column=1, padx=5, pady=5, sticky="w")

tk.Button(root, text="Quit", command= root.quit, padx=5).grid(row=5, column=0, padx=5, pady=5, sticky="w")
tk.Button(root, text="Submit", command= show_details, padx=5).grid(row=5, column=1, padx=5, pady=5, sticky="w")

root.mainloop()