import python;

words = ["List", "Dictionary", "Array"]

definitions = ["Ordered array of objects", "Unordered array of key-value pairs", "Mathematic definition"]

lenght = len(words)
coolDictionary = {}

for num in range(0, lenght):
    coolDictionary[words[lenght]] = definitions[lenght]

print("The contents of the dictionary are:\n")
for key, value in coolDictionary.items():
    print(f"    {key}: {value}")

