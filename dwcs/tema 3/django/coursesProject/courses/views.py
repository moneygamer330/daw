from django.shortcuts import render,get_object_or_404 # type: ignore
from .models import Courses

# Create your views here.

def courses(request):
    courses = Courses.objects.all()
    return render(request, 'courses/courses.html', {'courses':courses})

def course_detail(request, course_id):
    course = get_object_or_404(Courses, id=course_id)
    return render(request, 'courses/course_detail.html', {'course': course})