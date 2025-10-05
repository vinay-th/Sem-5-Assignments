# 17. Design a mini Library Management System with Book, Member, and
# Transaction classes to demonstrate attributes, methods, encapsulation, and
# object relationships. Add books, issue/return books, and track availability
class Book:
    def __init__(self, name, author, available = True):
        self.name = name
        self.author = author
        self.available = available

    def issue_book(self):
        if self.available:
            print(f"Book '{self.name}' issued successfully.")
            self.available = False
        else:
            print(f"Book '{self.name}' is currently not available.")
    
    def return_book(self):
        if self.available:
            print(f"Book '{self.name}' was not issued.")
        else:
            print(f"Book '{self.name}' returned successfully.")
            self.available = True
    
    def is_available(self):
        return self.available

    def __str__(self):
        return f"Book: {self.name}, Author: {self.author}, Available: {'Yes' if self.available else 'No'}"
    
class Member:
    def __init__(self, name):
        self.name = name
        self.issued_books = []
    
    def issue_book(self, book):
        if book.is_available():
            book.issue_book()
            self.issued_books.append(book)
        else:
            print(f"Cannot issue '{book.name}'. It is not available.")

    def return_book(self, book):
        if book in self.issued_books:
            book.return_book()
            self.issued_books.remove(book)
        else:
            print(f"Cannot return '{book.name}'. It was not issued.")

    def __str__(self):
        return f"Member: {self.name}, Issued Books: {[book.name for book in self.issued_books]}"
    
class Transaction:
    def __init__(self, member, book, transaction_type):
        self.member = member
        self.book = book
        self.transaction_type = transaction_type
    
    def process_transaction(self):
        if self.transaction_type == 'issue':
            self.member.issue_book(self.book)
        elif self.transaction_type == 'return':
            self.member.return_book(self.book)
        else:
            print("Invalid transaction type. Use 'issue' or 'return'.")
    
    def __str__(self):
        return f"Transaction: {self.transaction_type.capitalize()} - Member: {self.member.name}, Book: {self.book.name}"
    
if __name__ == "__main__":
    book1 = Book("1984", "George Orwell")
    book2 = Book("To Kill a Mockingbird", "Harper Lee")
    
    member1 = Member("Vinay")
    
    transaction1 = Transaction(member1, book1, 'issue')
    transaction1.process_transaction()
    print(member1)
    
    transaction2 = Transaction(member1, book1, 'issue')
    transaction2.process_transaction()
    
    transaction3 = Transaction(member1, book1, 'return')
    transaction3.process_transaction()
    print(member1)
    
    transaction4 = Transaction(member1, book1, 'return')
    transaction4.process_transaction()
    
    transaction5 = Transaction(member1, book2, 'issue')
    transaction5.process_transaction()
    print(member1)