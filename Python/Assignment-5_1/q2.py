import tkinter as tk

def show_value():
    lbl.config(text=f"You have selected: {var.get()}")

root = tk.Tk()
root.title("Select language: ")

var = tk.StringVar(value="None")

languages = ["Python", "Perl", "Java", "C", "C++"]

for lan in languages:
    tk.Radiobutton(root, text=lan, variable=var, value=lan, command=show_value).pack()

lbl = tk.Label(root, text="Select language:")
lbl.pack(pady=20, padx=20)

root.mainloop()