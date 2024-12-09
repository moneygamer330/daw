from django.shortcuts import render # type: ignore
 
# Create your views here.

def registration(request):
    if request.method == "POST":
        name = request.POST.get("name")
        surname = request.POST.get("surname")
        age = request.POST.get("age")

    
        return render(request, 'registration/registration.html', {"name": name, "surname": surname, "age": age})

    return render(request, 'registration/registration.html')