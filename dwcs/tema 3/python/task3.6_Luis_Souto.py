class Calculator:
    
    firstCalcule = None
    numberOfObjects = 0
    
    def __init__(self, num1 =6, num2 = 10):
        if(num1 == int or num2 == int):
            self.num1 = num1
            self.num2 = num2
        else:
            raise Exception("The numbers must be integers")
        Calculator.numberOfObjects += 1
        
    def __str__(self):
        return f"The numbers are: {self.num1}, {self.num2} and {Calculator.numberOfObjects}"
    
    
    def suma(self):
        return self.num1 + self.num2
    
    
try:
    firstCalculate = Calculator()
    firstCalculate.num1 = 1
    firstCalculate.num2 = 5
    print (f"THe values are {firstCalculate.num1} and {firstCalculate.num2}")

except Exception as error:
    print(error)