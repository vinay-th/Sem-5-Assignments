import math
import tkinter as tk

root = tk.Tk()
root.title("House Scene in Tkinter")

canvas = tk.Canvas(root, width=600, height=400)
canvas.pack()

# Sky
canvas.create_rectangle(0, 0, 600, 300, fill="#6DAFE5", outline="")

# Grass
canvas.create_rectangle(0, 300, 600, 400, fill="#1C7B13", outline="")

# Sun
canvas.create_oval(50, 50, 110, 110, fill="yellow", outline="")
for i in range(8):
    angle = i * 45
    x1 = 80 + 30 * math.cos(angle * math.pi / 180)
    y1 = 80 + 30 * math.sin(angle * math.pi / 180)
    x2 = 80 + 50 * math.cos(angle * math.pi / 180)
    y2 = 80 + 50 * math.sin(angle * math.pi / 180)
    canvas.create_line(x1, y1, x2, y2, fill="yellow", width=2)

# Cloud
canvas.create_oval(420, 70, 480, 110, fill="white", outline="")
canvas.create_oval(465, 55, 525, 115, fill="white", outline="")
canvas.create_oval(500, 70, 560, 110, fill="white", outline="")

# House body
canvas.create_rectangle(230, 180, 370, 300, fill="#F4E59B", outline="")
# House roof
canvas.create_polygon(210, 180, 400, 180, 305, 110, fill="#99874D", outline="")
# Door
canvas.create_rectangle(285, 230, 315, 300, fill="#C1B97F", outline="")
# Window
canvas.create_rectangle(255, 200, 285, 230, fill="#F4E59B", outline="#A5A57F", width=2)
canvas.create_oval(273, 215, 279, 221, fill="#99874D", outline="")

root.mainloop()
