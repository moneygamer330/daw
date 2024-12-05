from django.contrib import admin # type: ignore
from .models import Courses

# Register your models here.

admin.site.register(Courses)