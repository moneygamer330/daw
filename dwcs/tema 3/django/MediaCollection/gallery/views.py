from django.shortcuts import render
from images.models import Image
from video.models import Video

def gallery(request):
    images = Image.objects.all()
    videos = Video.objects.all()
    return render(request, 'gallery/gallery.html', {'images': images, 'videos': videos})
