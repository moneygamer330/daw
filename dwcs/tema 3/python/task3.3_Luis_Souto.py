def potencia(base, exponente):
    if type(base) != int or type(exponente) != int:            
        raise Exception(print("Ingrese números enteros."))
    else:
        try:
            producto = 1
            for num in range(1, exponente + 1):
                producto = producto * base
            return producto
        except:
            raise Exception("Ha habido un error, intentelo de nuevo")

potencia(3,2)

            