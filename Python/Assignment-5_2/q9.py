import tkinter as tk

def show_selected(event):
    selected = listbox.get(listbox.curselection())
    label.config(text=selected)

root = tk.Tk()
root.title("ListBox")
root.geometry("250x300")

listbox = tk.Listbox(root)
items = ["PHP", "ROR", "PYTHON", "ANDROID", "IOS"]

for item in items:
    listbox.insert(tk.END, item)

listbox.pack(pady=20)

listbox.bind("<<ListboxSelect>>", show_selected)

label = tk.Label(root, text="", font=("Arial", 20, "bold"))
label.pack(pady=20, padx=50)

root.mainloop()
