from django.shortcuts import render, redirect # type: ignore
from .forms import RegistrationForm
 
# Create your views here.

def registration(request):
    if request.method == 'POST':  
        form = RegistrationForm(request.POST)  
        if form.is_valid():
            form.save()  # Guarda el registro en la base de datos
            return redirect('registration')  # Redirige a la página de registro
    else:
        form = RegistrationForm()
    return render(request, 'registration/registration.html', {'form': form, 'success': True if 'success' in request.GET else False})