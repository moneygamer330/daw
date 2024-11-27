#TODO reapsar ejercicios python 

def showDictionary(dictionary):
    print("Dictionary contents:")
    for key, value in dictionary.items():
        print(f"Key: {key}, Value: {value}")
    print()

def findValue(dictionary, key):
    if key in dictionary:
        print(f"The value for key '{key}' is '{dictionary[key]}'.")
    else:
        print(f"Key '{key}' not found in the dictionary.")

def mergeDictionaries(dict1, dict2):
    merged_dict = {**dict1, **dict2}
    return merged_dict

if __name__ == "__main__":
    products = {0: 'potatoes', 1: 'tomatoes', 3: 'onions', 4: 'garlic'}

    print("Initial Dictionary:")
    showDictionary(products)

    products[5] = 'carrots'
    products[6] = 'cabbage'
    print("Dictionary after adding two products:")
    showDictionary(products)

    findValue(products, 3)  
    findValue(products, 7)  

    additional_products = {7: 'spinach', 8: 'broccoli'}
    merged_products = mergeDictionaries(products, additional_products)

    print("Merged Dictionary:")
    showDictionary(merged_products)
