from django.urls import path
from images.views import views

app_name = 'images'

urlpatterns = [
    path('', views.upload_image, name='upload_image'),
]
