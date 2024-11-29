# Defining Exception class for the error
class DivisionByZeroError(Exception):
    "Cannot divide by zero."
    pass

# defining division method
def divide_numbers(numerator:int, denominator:int):
    try:
        if denominator == 0:
            raise DivisionByZeroError
        if denominator != 0:
            return numerator/denominator 

    except DivisionByZeroError as e:
        return e



def main():
    
    try:
    # invoke the division method.
        print(divide_numbers(2,0))
    except DivisionByZeroError:
        print('Cannot divide by zero')
        
if __name__ == "__main__":
        main()