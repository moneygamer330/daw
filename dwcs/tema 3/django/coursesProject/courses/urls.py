from django.urls import path # type: ignore
from .views import views

urlpatterns = [
    path('', views.courses, name='courses'),
]