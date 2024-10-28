def facrorial (num):
    
    try:
        if(type(num) != int or num >=0):
            print(error)
    except Exception as error:
        print(error)    
        
        facto= 1
        
        for factorial in range(1, num+1):
            facrorial = num*facto
        return facrorial
    
    
    
    
    
    try:
        print(facrorial(5))
        
    except Exception as error:
        print/(error)