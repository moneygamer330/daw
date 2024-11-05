class Alien:
    numberOfAliens = 0
    
    def __init__(self, name):
        self.name = name
        Alien.numberOfAliens += 1
    
    def getNumberOfAliens(self):
        return Alien.numberOfAliens
        

alien1 = Alien("Zorg")
alien2 = Alien("Xanthe")
alien3 = Alien("Gliese")

Alien.getNumberOfAliens()
