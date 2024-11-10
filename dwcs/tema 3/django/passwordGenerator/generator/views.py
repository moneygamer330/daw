import random
from django.shortcuts import render

# Create your views here.
def  home(request):
    return render(request, 'generator/home.html')

def password(request):
    thepassword = ''

    characters = list('abcdefghijklmnoprstuvwxyz')

    length = int(request.GET.get('length', 11))

    if request.GET.get('uppercase'):
        characters.extend(list('ABCDEFGHIJKLMNOPQRSTUVWXYZ'))
    if request.GET.get('special'):
        characters.extend(list('!$%&/@*.,()'))
    if request.GET.get('number'):
        characters.extend(list('0123456789'))

    for x in range(length):
        thepassword += random.choice(characters)

    return render(request, 'generator/password.html', {'password': thepassword})

def about(request):
    return render(request, 'generator/about.html')

