#ex1

def tripleCheck(list):
    triple = False
    count = 0
    last = ""
    
    
    for number in range(1, list):
        if number == last:
            count = count +1
        else:
            count = 0
        if count == 2:    
            triple = True
            break
        last = number
        
    return triple

print("Triple check")
print(tripleCheck({ 1, 1, 2, 2, 1 }))
print(tripleCheck({ 1, 1, 2, 1, 2, 3 }))
print(tripleCheck({ 1, 1, 1, 2, 2, 2, 1 }))


#ex 2
ceu = {
    "Italy": "Rome",
    "Luxembourg": "Luxembourg",
    "Belgium": "Brussels",
    "Denmark": "Copenhagen",
    "Finland": "Helsinki",
    "France": "Paris",
    "Slovakia": "Bratislava",
    "Slovenia": "Ljubljana",
    "Germany": "Berlin",
    "Greece": "Athens",
    "Ireland": "Dublin",
    "Netherlands": "Amsterdam",
    "Portugal": "Lisbon",
    "Spain": "Madrid",
    "Sweden": "Stockholm",
    "United Kingdom": "London",
    "Cyprus": "Nicosia",
    "Lithuania": "Vilnius",
    "Czech Republic": "Prague",
    "Estonia": "Tallin",
    "Hungary": "Budapest",
    "Latvia": "Riga",
    "Malta": "Valetta",
    "Austria": "Vienna",
    "Poland": "Warsaw"
}


def paisCapita(ceu):
    for pais in ceu:
        print(f"The capital of {pais}" is {ceu[pais]})