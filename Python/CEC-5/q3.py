import tkinter as tk

root = tk.Tk()

canvas = tk.Canvas(root, width=500, height=500)
canvas.pack()

canvas.create_oval(100, 250, 250, 100, fill="yellow", outline="black")
canvas.create_oval(110, 150, 150, 120, fill="black")
canvas.create_oval(170, 150, 210, 120, fill="black")
canvas.create_arc(125, 150, 225, 220, start=200, extent=140, style=tk.ARC, width=5)

root.mainloop()