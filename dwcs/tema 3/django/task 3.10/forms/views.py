from django.shortcuts import render

def home(request):
    username = request.GET.get('username', 'No especificado')
    password = request.GET.get('password', 'No especificado')
    city = request.GET.get('city', 'No especificado')
    web_server = request.GET.get('web_server', 'No especificado')
    opcion = request.GET.get('opcion', 'No seleccionado')
    preferencias = request.GET.getlist('preferencias')

    context = {
        'username': username,
        'password': password,
        'city': city,
        'web_server': web_server,
        'opcion': opcion,
        'preferencias': preferencias if preferencias else ['No seleccionadas'],
    }
    
    return render(request, 'html/home.html', context)
