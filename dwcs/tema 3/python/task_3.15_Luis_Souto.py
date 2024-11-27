import json

#Transform json to 
with open('python/catalog(1).json', 'r') as json_file:
    data = json.load(json_file)
    print("Type:", type(data))
    print(data)
    
    
    for book in data['catalog']['book']:
        print(book['title'])
    