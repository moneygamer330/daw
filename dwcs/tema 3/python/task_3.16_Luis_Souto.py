from datetime import date

class Person:
    def __init__(self, name, email, telephone):
        self.name = name
        self.email = email
        self.telephone = telephone
    def __str__(self):
        return self.name + " " + self.email + " " + self.telephone
    
class Product:
    def __init__(self, name, description, price, image):
        self.name = name
        self.description = description
        self.price = price
        self.image = image
    
    def __str__(self):
        return self.name + " " + self.description + " " + self.price + " " + self.image
    
class Order:
    def __init__(self, date:date, product:Product, client:Person):
        self.date = date
        self.product = product
        self.person = client
        
    def __str__(self): 
        product_details = "\n".join(f" - {Product} for product in self.products")
    
    def main():
        # Create some products
        product1 = Product("Laptop", "A high-end gaming laptop", "1500", "laptop.jpg")
        product2 = Product("Smartphone", "Latest model smartphone", "800", "smartphone.jpg")
        product3 = Product("Headphones", "Noise-cancelling headphones", "200", "headphones.jpg")

        # Create a client
        client = Person("John Doe", "john.doe@example.com", "123-456-7890")

        # Create orders
        order1 = Order(date.today(), product1, client)
        order2 = Order(date.today(), product2, client)
        order3 = Order(date.today(), product3, client)

        # Print orders
        print("Order 1:")
        print(order1)
        print("\nOrder 2:")
        print(order2)
        print("\nOrder 3:")
        print(order3)

        # Calculate total amount
        total_amount = float(product1.price) + float(product2.price) + float(product3.price)
        print("\nTotal Amount: $" + str(total_amount))

    if __name__ == "__main__":
        main()