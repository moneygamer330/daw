from django.shortcuts import render # type: ignore
from .models import Courses

# Create your views here.

def courses(request):
    courses = Courses.objects.all()
    return render(request, 'courses/courses.html', {'courses':courses})