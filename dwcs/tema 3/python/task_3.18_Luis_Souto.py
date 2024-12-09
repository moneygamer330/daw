# 
# 
#TODO EXAM: 3.18, 3.16, 3.17, 3.15
# 
# LISTS
# add (.append()) 
# loops ([for x in list], range())
# 
# DICTIONARIES (acces, add, loop)
# access
# add 
# loop
#
# CLASSES
# all functions are 'self'
# to string method (return f'..{self.x}..')
# 
# EXCEPTIONS
# 
#


class BookNotAvailableException(Exception):
    def __init__(self, message):
        self.message = message
        super().__init__(self.message)


class BookNotFoundException(Exception):
    def __init__(self, message):
        self.message = message
        super().__init__(self.message)


class Book:
    def __init__(self, title, author, status=True):
        self.title = title
        self.author = author
        self.status = status

    def __str__(self):
        return f"{self.title} by {self.author} is {'available' if self.status else 'not available'}"


class Library:
    def __init__(self):
        self.books = []

    def add_book(self, title, author):
        self.books.append(Book(title, author))

    def remove_book(self, title):
        for book in self.books:
            if book.title == title:
                self.books.remove(book)
                return True
        return False

    def change_status(self, title, status):
        for book in self.books:
            if book.title == title:
                book.status = status
                return True
        return False

    def show_books(self):
        for book in self.books:
            print(book)

    def list_available_books(self):
        for book in self.books:
            if book.status:
                print(book)

    def borrow_book(self, title):
        for book in self.books:
            if book.title == title:
                if book.status:
                    book.status = False
                    return
                else:
                    raise BookNotAvailableException(f"The book '{title}' is not available.")
        raise BookNotFoundException(f"The book '{title}' was not found in the library.")

    def return_book(self, title):
        for book in self.books:
            if book.title == title:
                if not book.status:
                    book.status = True
                    return
                else:
                    raise BookNotAvailableException(f"The book '{title}' was not borrowed.")
        raise BookNotFoundException(f"The book '{title}' was not found in the library.")


# Example usage
library = Library()
library.add_book("1984", "George Orwell")
library.add_book("To Kill a Mockingbird", "Harper Lee")

print("All books in the library:")
library.show_books()

print("\nAvailable books in the library:")
library.list_available_books()

try:
    library.borrow_book("1984")
    print("\nAfter borrowing '1984':")
    library.list_available_books()

    library.return_book("1984")
    print("\nAfter returning '1984':")
    library.list_available_books()
except (BookNotAvailableException, BookNotFoundException) as e:
    print(e)
