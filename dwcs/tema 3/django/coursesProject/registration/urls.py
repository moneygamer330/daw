from django.urls import path, include # type: ignore
from .views import views

urlpatterns = [
    path('', views.registration, name='registration'),
]