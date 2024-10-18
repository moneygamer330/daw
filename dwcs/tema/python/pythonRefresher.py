age = 12
name = "Nick"

if age > 18:
    print("I am an adult")
else:
    print("I am a child")
# One line comment
""" Multiline comment 
    Line 2
    Line 3"""


print(" ")

year = 2001

if year ==2000 <= year <= 2099:
    print('Welcome to the 21st century')
else:
    print('You are before or after the 21st century')


def hello(name, age):
    print("Hello {}, you are {} years old".format(name, age))

    hello("Nick", 12)