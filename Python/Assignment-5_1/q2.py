import tkinter as tk

root = tk.Tk()
root.title("Select a language")
root.geometry("300x400")

var = tk.StringVar(value="")

tk.Radiobutton(root, text="Python", variable=var, value="Python").pack()
tk.Radiobutton(root, text="Perl", variable=var, value="Perl").pack()
tk.Radiobutton(root, text="Java", variable=var, value="Java").pack()
tk.Radiobutton(root, text="C", variable=var, value="C").pack()
tk.Radiobutton(root, text="C++", variable=var, value="C++").pack()

root.mainloop()