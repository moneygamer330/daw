from django.urls import path # type: ignore
from .views import courses, course_detail

urlpatterns = [
    path('', courses, name='courses'),
    path('<int:course_id>/', course_detail, name='course_detail'),
]