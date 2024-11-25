from django.urls import path
from .views import upload_image

app_name = 'images'

urlpatterns = [
    path('', upload_image, name='upload_image')
]
