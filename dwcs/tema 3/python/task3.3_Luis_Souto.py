def potencia(base, exponente):
    if type(base) != int or type(exponente) != int:            
        raise Exception(print("Ingrese números enteros."))
    else:
            producto = 1
            for num in range(1, exponente + 1):
                producto = producto * base
            return producto
        

potencia(3,2)
            
            
try:
    print(potencia(3,4))
    potencia(2, 3.4)
except Exception as error:
    print(error)
