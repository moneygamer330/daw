import json

#Transform json to 
with open('catalog(1).json', 'r') as json_file:
    data = json.load(json_file)
    print("Type:", type(data))
    
    print("\nPrinting the title of the books\n")
    for x in data['catalog']:
        print("Title: {x['title']}")