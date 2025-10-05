# 1. Create a Python program which have following widgets:
# • Button
# • MessageBox
# • When user clicks on Button, MessageBox is display with some message.

import tkinter as tk
from tkinter import messagebox

def show_message(title, data):
    messagebox.showinfo(title, data)

root = tk.Tk()
root.title("Button and Messagebox")
root.geometry("300x400")

btn = tk.Button(root, text="Click Me😘" , command=lambda : show_message("Hello", "Kya aapke toothpaste mai namak hai?"), font=("Ariel", 20), bg="red", fg="black")
btn.pack(pady=60)

root.mainloop()