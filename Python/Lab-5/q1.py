# 1.  Create a class paper with width and height as data Member. Create function outside a
# class that find out area and perimeter of that paper Pass object as
# argument.area=weight*height, perimeter=2+width+height
class Paper:
    def __init__(self, width, height):
        self.width = width
        self.height = height

def calculate(paper):
    area = paper.width * paper.height
    perimeter = (paper.width + paper.height) * 2

    return area, perimeter

h = float(input("Enter the height of paper: "))
w = float(input("Enter the width of paper: "))

p = Paper(w, h)
area, perimeter = calculate(p)

print(f"Area of paper: {area}")
print(f"Perimeter of paper: {perimeter}")