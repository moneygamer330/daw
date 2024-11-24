from django.urls import path
from video.views import views

app_name = 'video'

urlpatterns = [
    path('', views.upload_video, name='upload_video'),
]
