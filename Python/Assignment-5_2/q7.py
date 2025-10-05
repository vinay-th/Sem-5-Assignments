import tkinter as tk
from tkinter import messagebox

def show_add():
    try:
        num1 = float(entry1.get())
        num2 = float(entry2.get())

        res = num1 + num2

        entry3.delete(0,tk.END)
        entry3.insert(0, str(res))
    except ValueError:
        messagebox.showerror("Invalid input", "Please enter valid numbers.")


root = tk.Tk()
root.title("Hello")

lbl1 = tk.Label(root, text="Enter num1: ")
lbl2 = tk.Label(root, text="Enter num2: ")
lbl3 = tk.Label(root, text="Sum of num1+num: ")

lbl1.grid(row=0, column=0, padx=5, pady=5, sticky="w")
lbl2.grid(row=1, column=0, padx=5, pady=5, sticky="w")
lbl3.grid(row=2, column=0, padx=5, pady=5, sticky="w")

entry1 = tk.Entry(root)
entry2 = tk.Entry(root)
entry3 = tk.Entry(root)

entry1.grid(row=0, column=1, padx=5, pady=5, sticky="w")
entry2.grid(row=1, column=1, padx=5, pady=5, sticky="w")
entry3.grid(row=2, column=1, padx=5, pady=5, sticky="w")

tk.Button(root, text="Quit", command=root.quit).grid(row=3, column=0, padx=5, pady=5, sticky="w")
tk.Button(root, text="Submit", command=show_add).grid(row=3, column=1, padx=5, pady=5, sticky="w")

root.mainloop()