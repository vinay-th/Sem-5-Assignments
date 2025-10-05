import tkinter as tk

root = tk.Tk()
root.title = "Colors LGTV"
root.geometry("300x200")

tk.Button(root, text="red", background="red", padx = 20).pack()
tk.Button(root, text="yellow", background="yellow", padx = 20).pack()
tk.Button(root, text="pink", background="pink", padx = 20).pack()
tk.Button(root, text="green", background="green", padx = 20).pack()
tk.Button(root, text="purple", background="purple", padx = 20).pack()
tk.Button(root, text="orange", background="orange", padx = 20).pack()
tk.Button(root, text="blue", background="blue", padx = 20).pack()

root.mainloop()