from django.shortcuts import render # type: ignore
from .models import Registration

# Create your views here.

def registrarion(request):
    registrarion = Registration.objects.all()
    return render(request, 'registration/registration.html', {'registration':registrarion})