# 4. Create a Python program that have two Radiobutton having value as:
# Your Age:
# ● Less than 18
# ● Greater than 18
# When user selects any of the Radiobutton displat proper message in label.
# Note: If user selects Less than 18 than it should give message “You are not eligible for
# voting” and if user selects Greater than 18 than it should give message “ You are eligible
# for voting”
import tkinter as tk

def show_message():
    if var.get() == "above":
        lbl.config(text="You are eligible for voting")
    elif var.get() == "below":
        lbl.config(text="You are not eligible for voting")

root = tk.Tk()
root.title("Age verification")

frame = tk.Frame(root, padx=20, pady=20, borderwidth=2)
frame.pack(padx=20, pady=20)

var = tk.StringVar(value="None")

tk.Radiobutton(frame, text="Above 18", variable=var, value = "above", command=show_message).pack()
tk.Radiobutton(frame, text="Below 18", variable=var, value = "below", command=show_message).pack()

lbl = tk.Label(frame, text="")
lbl.pack(pady=10)

root.mainloop()