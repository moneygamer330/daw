#TODO mirar w3 django, y ejemplos de sites
from django.shortcuts import render
from .models import Project #import class from models.py

# Create your views here.

def home(request):
    projects = Project.objects.all()
    return render(request, 'portfolio/home.html',{'projects':projects})
  