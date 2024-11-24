from django.urls import path
from .views import upload_video

app_name = 'video'

urlpatterns = [
    path('', upload_video, name='upload_video')
]
