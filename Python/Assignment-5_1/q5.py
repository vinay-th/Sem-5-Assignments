import tkinter as tk
from tkinter import messagebox

def show_message():
    messagebox.showinfo(title="Gender chosen", message=var.get())

root = tk.Tk()
root.title = "Gender choose"

frame = tk.Frame(root, padx=30, pady=30, borderwidth=2)
frame.pack(padx=20, pady=20)

var = tk.StringVar(value="None")

tk.Radiobutton(frame, text="Male", variable=var, value="Male").pack()
tk.Radiobutton(frame, text="Female", variable=var, value="Female").pack()

tk.Button(frame, padx=20, text="Select", command=show_message).pack()
tk.Button(frame, padx=20, text="Quit", command=root.quit).pack()

root.mainloop()