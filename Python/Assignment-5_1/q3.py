import tkinter as tk

def show_value():
    selected = []
    if banana.get():
        selected.append("Banana")
    if chicken.get():
        selected.append("Chicken")
    if stuffed_pepper.get():
        selected.append("Stuffed Pepper")

    lbl.config(text=f"Selected: " + ", ".join(selected) if selected else "Selected: None")

root = tk.Tk()
root.title("Lunch Menu: ")

frame = tk.Frame(root, padx=10, pady=10, borderwidth=2)
frame.pack(padx=10, pady=10)

prompt = tk.Label(frame, text="Choose your lunch: ")
prompt.grid(row=0, column=0, columnspan=3)

banana = tk.BooleanVar()
chicken = tk.BooleanVar()
stuffed_pepper = tk.BooleanVar()

cb1 = tk.Checkbutton(frame, text="Banana", variable=banana, command=show_value)
cb1.grid(row=1, column=0, padx=30)

cb2 = tk.Checkbutton(frame, text="Chicken", variable=chicken, command=show_value)
cb2.grid(row=1, column=1, padx=30)

cb3 = tk.Checkbutton(frame, text="Stuffed Pepper", variable=stuffed_pepper, command=show_value)
cb3.grid(row=1, column=3, padx=30)

lbl = tk.Label(frame, text="Selected: None")
lbl.grid(row=2, column=0, columnspan=3, pady=30, padx=30, sticky="w")

root.mainloop()