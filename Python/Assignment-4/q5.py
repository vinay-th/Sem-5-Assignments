# 5. Create a Media base class and a Movie subclass with additional attributes such
# as genre and rating. Add a method to recommend a movie based on rating and
# genre.
class Media:
    def __init__(self, title, author):
        self.title = title
        self.author = author

class Movie(Media):
    def __init__(self, title, author, duration, genre, rating):
        super().__init__(title, author)
        self.genre = genre
        self.rating = rating
        self.duration = duration
    
    def recommend_movie(self, genre, min_rating = 5):
        return self if self.genre == genre and self.rating >= min_rating else None
    
mov1 = Movie("Inception", "Nolan", 200, "Sci-Fi", 9)
mov2 = Movie("Infinity War", "Russo Bro", 180, "Action", 8)
mov3 = Movie("XYZ", "ABC", 210, "Comedy", 5)

rec = mov1.recommend_movie("Sci-Fi")
print("Recommended Movie:", rec.title if rec else "No recommendation")