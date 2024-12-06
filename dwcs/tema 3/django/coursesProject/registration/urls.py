from django.urls import path, include # type: ignore
from .views import registration

urlpatterns = [
    path('', registration, name='registration')
]