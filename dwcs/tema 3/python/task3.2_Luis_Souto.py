def task32 (age, surname = 'Apelido', name = None ) :
    if name != None:  
        print(f" {name} {surname} is {age} years old")
    else:
        print(f" {surname} is {age} years old")
        
        
task32(24, "Manuel")
