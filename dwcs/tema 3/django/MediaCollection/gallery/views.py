from django.shortcuts import render
from images.models import Image
from video.models import Video

def gallery(request):
    images = Image.objects.all()
    videos = Video.objects.all()
    media_files = list(images) + list(videos)
    return render(request, 'gallery/gallery.html', {'media_files': media_files})
